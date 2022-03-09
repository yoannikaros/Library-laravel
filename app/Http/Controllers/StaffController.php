<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;


class StaffController extends Controller
{

    public function index()
    {
        $datanya = Staff::all();
        return view('admin.staffs.index', compact('datanya'));
    }

    public function create()
    {
        return view('admin.staffs.create');
    }


    public function store(Request $request)
    {

        $staffData = $request->validate(
            [
                'name' => 'required',
                'username' => 'required|unique:staffs',
                'password' => 'required',
                'phone_number' => 'required',
                'address' => 'required'
            ]
        );

        Staff::create($staffData);

        return redirect(route('staffs.index'));
    }


    public function edit(Staff $staff)
    {
        return view('admin.staffs.edit', compact('staff'));
    }


    public function update(Request $request, Staff $staff)
    {

        $staffData = $request->validate(
            [
                'name' => 'required',
                'username' => "required|unique:staffs,username,{$staff->id}",
                'password' => '',
                'phone_number' => 'required',
                'address' => 'required'
            ]
        );

        if (!$request->password) {
            $request->password = $staff->password;
        } else {
            $request->password = bcrypt($request->password);
        }

        $staffData['password'] = $request->password;

        $staff->update($staffData);

        return redirect(route('staffs.index'));
    }


    public function destroy(Staff $staff)
    {
        $staff->delete();
        return redirect(route('staffs.index'));
    }
}
