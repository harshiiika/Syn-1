<?php

namespace App\Http\Controllers;

use App\Mail\AccountActivated;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

class AdminController extends Controller
{
    /**
     * Redirect after login based on role.
     */
    public function redirectAfterLogin()
    {
        $user = Auth::user();

        if ($user->is_admin) {
            // Redirect admin to emp dashboard with all users
            $customers = User::all();
            return view('emp.emp', compact('customers'));
        } else {
            // Redirect normal user to /emp (can be another blade view or route)
            return redirect('/emp');
        }
    }

    /**
     * Toggle activation status and send email when activated.
     */
    public function updateStatus($id)
    {
        $user = User::findOrFail($id);

        $user->is_active = !$user->is_active; // toggle the value
        $user->save();

        if ($user->is_active) {
            Mail::to($user->email)->send(new AccountActivated($user));
        }

        return redirect()->back()->with('success', 'User status updated successfully.');
    }
}
