<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MemberPagesController extends Controller
{
    public function dashboard()
    {
        return view('member.dashboard');
    }
}
