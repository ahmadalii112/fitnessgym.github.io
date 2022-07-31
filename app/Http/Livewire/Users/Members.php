<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
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
            'users' => User::search('name', $this->search)->orderBy($this->sortField, $this->sorDirection)->paginate($this->perPage),
        ]);
    }
}