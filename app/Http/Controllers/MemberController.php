<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::all();
        return view('admin.members.index', compact('members'));
    }


    public function create()
    {
        return view('admin.members.create');
    }


    public function store(Request $request)
    {
        $memberData = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:members',
            'password' => 'required',
            'phone_number' => '',
            'address' => ''
        ]);

        Member::create($memberData);

        return redirect(route('members.index'));
    }

    public function edit(Member $member)
    {
        return view('admin.members.edit', compact('member'));
    }

    public function update(Request $request, Member $member)
    {
        $memberData = $request->validate([
            'name' => 'required',
            'email' => "required|unique:members,email,$member->id",
            'password' => '',
            'phone_number' => '',
            'address' => ''
        ]);


        if (!$request->password) {
            $request->password = $member->password;
        } else {
            $request->password = bcrypt($request->password);
        }

        $memberData['password'] = $request->password;

        $member->update($memberData);

        return redirect(route('members.index'));
    }


    public function destroy(Member $member)
    {
        $member->delete();
        return redirect(route('members.index'));
    }
}
