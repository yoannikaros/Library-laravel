<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;


class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $datanya = Staff::all();
        return view('admin.staffs.index', compact('datanya'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Staff;
        return view('admin.staffs.create',compact('model'));    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $model = new staff;
    $model->name = $request->name;
    $model->username = $request->username;
    $model->password = $request->password;
    $model->phone_number = $request->phone_number;
    $model->address = $request->address;
    $model->save();
    return redirect('/admin/staffs');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Staff::find($id);
        return view('admin.staffs.edit',compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = staff ::find($id);
        $model->name = $request->name;
        $model->username = $request->username;
        $model->password = $request->password;
        $model->phone_number = $request->phone_number;
        $model->address = $request->address;
        $model->save();
        return redirect('/admin/staffs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = staff::find($id);
        $model->delete();
        return redirect('/admin/staffs');

    }
}
