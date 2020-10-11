<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MemberController extends Controller
{
    public function index()
    {
        return view('Panel.dashboard2');
    }
}
