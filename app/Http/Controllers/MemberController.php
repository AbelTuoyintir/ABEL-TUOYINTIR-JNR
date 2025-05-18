<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;


class MemberController extends Controller
{
    //
    public function index()
    {
        return view('members');
    }

    

    
}
