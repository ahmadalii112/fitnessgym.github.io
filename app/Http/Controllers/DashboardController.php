<?php

namespace App\Http\Controllers;

use App\Models\FeeStructure;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
  public $newMembers = 0, $pendingDues = 0;
  public function dashboard()
  {
    $totalMembers = User::where('id', '!=' ,auth()->id())->count();
    $totalAmount = FeeStructure::select(DB::raw('sum(total_fee_by_user + admission_fee) as total'))->value('total') ?? 0;
    $currentYearMonth = now()->format('Y-m');
    if (FeeStructure::get()->isNotEmpty()) {
      $this->newMembers = FeeStructure::where('admission_date', 'Like', '%' . $currentYearMonth. '%')->count();
      $this->pendingDues = FeeStructure::where('due_fee_date', '<=', dateForHumans())->count();
    }
    return view('dashboard', compact('totalMembers', 'totalAmount'))
      ->with('newMembers', $this->newMembers)
      ->with('pendingDues', $this->pendingDues);
  }
}
