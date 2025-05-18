<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\District;
use App\Models\Region;
use App\Models\Office;
use App\Models\Department;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        

        return view('admin.authenticate.login', );
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'email'       => 'required|email|unique:users',
            'staffID'     => 'required|unique:users',
            'password'    => 'required|string|min:6',
            'role'        => ['required', Rule::in(['user', 'technician', 'admin'])],
            'phone'       => 'nullable|string|max:15',
        ]);

        $user = User::create([
            'name'         => $request->name,
            'email'        => $request->email,
            'staffID'      => $request->staffID,
            'password'     => Hash::make($request->password),
            'role'         => $request->role,
            'phone'        => $request->phone,
        ]);

        return view('admin.authenticate.login')->with('success', 'User created successfully');
    }
    
    public function login(Request $request)
    {
        $request->validate([
            'staffID'    => 'required|string',
            'password' => 'required|string|min:6',
        ]);

        if (Auth::attempt($request->only('staffID', 'password'))) {
            return redirect()->route('dashboard')->with('success', 'Login successful');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    
}
