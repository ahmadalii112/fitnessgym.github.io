<?php

namespace App\Http\Controllers;

use App\Http\Requests\MemberRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

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
        $user = User::create($request->validated() + [ 'height' => $request->feet . " " .$request->inches ]);
        return redirect(route('members.index'))->with('message', 'Member Added Successfully');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $user = User::where('id', '!=', auth()->id())->find($id);
        return view('members.members-create-edit', compact('user'));
    }


    public function update(MemberRequest $request, User $member)
    {
        $member->update($request->validated() + [ 'height' => $request->feet . " " .$request->inches ]);
        return redirect(route('members.index'))->with('message', 'Member Updated Successfully');
    }


    public function destroy($id)
    {
        //
    }
}
