<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class EmpController extends Controller
{

public function redirectAfterLogin()
{
    $user = Auth::user();

    if ($user->is_admin) {
        $customers = User::all();  
        return view('emp.emp', compact('users'));
    } else {
        return redirect('/emp');
    }
}

/**
 * Toggle activation status and send email when activated.
 */

public function updateStatus($id)
{
        $user = User::findOrFail($id);

        $user->is_active = !$user->is_active;
        $user->save();

        return redirect()->back()->with('success', 'User status updated successfully.');
    }
    public function addUser(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string',
        'phone' => 'required|string|min:10|max:15',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:8|confirmed',
    ]);

    $user = User::create([
        'name' => $validated['name'],
        'phone' => $validated['phone'],
        'email' => $validated['email'],
        'password' => bcrypt($validated['password']),
    ]);

    return response()->json([
        'status' => 'success',
        'user' => $user
    ]);
}

}
