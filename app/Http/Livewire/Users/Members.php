<?php

namespace App\Http\Livewire\Users;

use App\Models\FeeStructure;
use App\Models\User;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class Members extends Component
{
  use WithPagination;

  public $search = '';
  public $perPage = 15;
  public $sortField = 'created_at';
  public $sorDirection = 'desc';
  protected $queryString = ['sortField', 'sorDirection'];
  public $confirmingUserDeletion = false;
  public $confirmingUserFee = false;
  public $full_name = '';
  public $monthly_fee = '3000';

  public function sortBy($field)
  {
    $this->sorDirection = $this->sortField === $field
      ? $this->sorDirection = $this->sorDirection === 'asc' ? 'desc' : 'asc'
      : 'asc';

    $this->sortField = $field;

  }

  public function render()
  {
    return view('livewire.users.members', [
      'users' => User::query()
        ->with('feeStructure')
        ->search('search', $this->search)
        ->where('id', '!=', auth()->id())
        ->orderBy($this->sortField, $this->sorDirection)->paginate($this->perPage),
    ]);
  }

  public function confirmUserDeletion($id)
  {
    $this->confirmingUserDeletion = $id;
    $this->full_name = User::find($id)->full_name;
  }

  public function deleteUser($user)
  {
    User::whereId($user)->delete();
    $this->confirmingUserDeletion = false;
  }

  # TODO : FeePay Modal
  public function confirmUserFee($id)
  {
    $this->confirmingUserFee = $id;
    $this->full_name = User::find($id)->full_name;
  }

  public function feePayUser($user)
  {
    $currentDate = dateForHumans();
    $currentMonthDate = Carbon::parse($currentDate);
    $nextMonthDate = $currentMonthDate->addMonth()->format('Y-m-d');
    $userFee = FeeStructure::whereUserId($user);
    $total = ($userFee->first()->total_fee_by_user + $this->monthly_fee);
    $userFee->update([
      'total_fee_by_user' => $total,
      'monthly_fee' => $this->monthly_fee,
      'admission_date' => $userFee->first()->value('admission_date'),
      'issue_fee_date' => $currentDate,
      'due_fee_date' => $nextMonthDate,
      'status' => 'Paid',
    ]);
    $this->confirmingUserFee = false;
    return $this->redirect('dashboard');
  }

}
