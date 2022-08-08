<?php

namespace App\Http\Controllers;

use App\Http\Requests\MemberRequest;
use App\Models\FeeStructure;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
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

    public function index()
    {
        return view('members.index');
    }


    public function create()
    {
        return view('members.members-create-edit');
    }


    public function store(MemberRequest $request)
    {
        # dd(array_merge($request->validated(), ['height' => $request->feet]));
        $user = User::create($request->validated() + ['height' => $request->feet . " " . $request->inches]);
        // Todo: Gym fee
        $currentDate = dateForHumans();
        $currentMonthDate = Carbon::parse($currentDate);
        $nextMonthDate = $currentMonthDate->addMonth()->format('Y-m-d');
        $user->feeStructure()->create([
            'admission_fee' => $request->admission_fee ?? 0,
            'total_fee_by_user' => $request->monthly_fee,
            'monthly_fee' => $request->monthly_fee,
            'admission_date' => $currentDate,
            'issue_fee_date' => $currentDate,
            'due_fee_date' => $nextMonthDate,
            'status' => 'Paid',
        ]);
        return redirect(route('members.index'))->with('message', 'Member Added Successfully');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $user = User::where('id', '!=', auth()->id())->whereGymId($id)->firstOrFail();
        $height = !empty($user->height) ? $user->full_height : null;
        return view('members.members-create-edit', compact('user', 'height'));
    }


    public function update(MemberRequest $request, User $member)
    {
        $member->update($request->validated() + ['height' => $request->feet . " " . $request->inches]);
        return redirect(route('members.index'))->with('message', 'Member Updated Successfully');
    }


    public function destroy($id)
    {
        //
    }
}
