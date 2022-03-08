<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReversionController extends Controller
{
    public function index()
    {
        return view('admin.reversions.index');
    }
}
