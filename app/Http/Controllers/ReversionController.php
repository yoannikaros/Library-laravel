<?php

namespace App\Http\Controllers;

use App\Models\Reversion;
use Illuminate\Http\Request;

class ReversionController extends Controller
{
    public function index()
    {
        $reversions = Reversion::all();
        return view('admin.reversions.index',compact('reversions'));
    }
}
