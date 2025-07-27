<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Add a new employee
     */
    public function addUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'mobile' => 'required|string|max:15',
            'alt_mobile' => 'nullable|string|max:15',
            'branch' => 'required|string',
            'role' => 'required|string',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password',
            'document' => 'nullable|file|mimes:jpg,png,pdf|max:2048',
        ]);

        $roleDepartmentMap = [
            'Front Office' => 'Operations',
            'Back Office' => 'Finance',
            'Office' => 'Admin',
            'Test Management' => 'Quality Control',
        ];

        $department = $roleDepartmentMap[$request->input('role')] ?? 'General';

        $filePath = $request->hasFile('document')
            ? $request->file('document')->store('documents', 'public')
            : null;

        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'mobile' => $request->input('mobile'),
            'alt_mobile' => $request->input('alt_mobile'),
            'branch' => $request->input('branch'),
            'role' => $request->input('role'),
            'department' => $department,
            'password' => Hash::make($request->input('password')),
            'document' => $filePath,
            'status' => 'Active',
        ]);

        return redirect()->route('emp')->with('success', 'Employee added successfully!');
    }

    /**
     * Update an existing employee
     */
    public function updateUser(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'mobile' => 'required|string|max:15',
            'alt_mobile' => 'nullable|string|max:15',
            'branch' => 'required|string',
            'role' => 'required|string',
            'document' => 'nullable|file|mimes:jpg,png,pdf|max:2048',
        ]);

        $roleDepartmentMap = [
            'Front Office' => 'Operations',
            'Back Office' => 'Finance',
            'Office' => 'Admin',
            'Test Management' => 'Quality Control',
        ];

        $department = $roleDepartmentMap[$request->input('role')] ?? 'General';

        $filePath = $request->hasFile('document')
            ? $request->file('document')->store('documents', 'public')
            : null;

        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'mobile' => $request->input('mobile'),
            'alt_mobile' => $request->input('alt_mobile'),
            'branch' => $request->input('branch'),
            'role' => $request->input('role'),
            'department' => $department,
            'document' => $filePath,
        ]);

        return redirect()->route('emp')->with('success', 'User updated successfully!');
    }
    /**
     * Update user password
     */
      
    public function updatePassword(Request $request, $id)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:6',
            'confirm_new_password' => 'required|same:new_password',
        ]);

        $user = User::findOrFail($id);

        if (!Hash::check($request->input('current_password'), $user->password)) {
            return back()->withErrors(['current_password' => 'Incorrect current password']);
        }

        $user->update([
            'password' => Hash::make($request->input('new_password')),
        ]);

        return redirect()->route('emp')->with('success', 'Password updated successfully!');
    }

    /**
     * Toggle user status
     */
    public function toggleStatus($id)
    {
        $user = User::findOrFail($id);

        $newStatus = ($user->status ?? 'Active') === 'Active' ? 'Deactivated' : 'Active';

        $user->update(['status' => $newStatus]);

        return redirect()->route('emp')->with('success', 'User status changed to ' . $newStatus . '!');
    }
}