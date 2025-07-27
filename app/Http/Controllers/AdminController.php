<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function redirectToEmployees()
{
    $customers = User::all();
    return view('emp.emp', compact('customers'));
}
public function addUser(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6',
        'mobile' => 'required',
        'alt_mobile' => 'nullable',
        'department' => 'required',
        'role' => 'required',
        'branch' => 'required',
    ]);

    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'mobile' => $request->mobile,
        'alt_mobile' => $request->alt_mobile,
        'department' => $request->department,
        'role' => $request->role,
        'branch' => $request->branch,
    ]);

    return redirect()->back()->with('success', 'Employee added successfully!');
}
}
