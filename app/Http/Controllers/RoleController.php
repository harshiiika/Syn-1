<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Department;

class RoleController extends Controller
{
    // Show all roles
    public function index()
    {
        $roles = Role::with('departments')->get();
        return view('roles.index', compact('roles'));
    }

    // Show create form (optional if using modal)
    public function create()
    {
        $departments = Department::all();
        return view('roles.create', compact('departments'));
    }

    // Store a new role
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:roles',
            'departments' => 'nullable|array',
        ]);

        $role = Role::create([
            'name' => $request->name,
        ]);

        // Attach selected departments if any
        if ($request->has('departments')) {
            $role->departments()->sync($request->departments);
        }

        return redirect()->back()->with('success', 'Role created successfully!');
    }

    // Show edit form
    public function edit($id)
    {
        $role = Role::findOrFail($id);
        $departments = Department::all();

        return view('roles.edit', compact('role', 'departments'));
    }

    // Update role
    public function update(Request $request, $id)
    {
        $role = Role::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255|unique:roles,name,' . $role->id,
            'departments' => 'nullable|array',
        ]);

        $role->update([
            'name' => $request->name,
        ]);

        // Sync departments
        if ($request->has('departments')) {
            $role->departments()->sync($request->departments);
        }

        return redirect()->back()->with('success', 'Role updated successfully!');
    }

    // Delete role
    public function destroy($id)
    {
        $role = Role::findOrFail($id);
        $role->departments()->detach(); // Detach relationships first
        $role->employees()->detach();   // Detach employee-role if used
        $role->delete();

        return redirect()->back()->with('success', 'Role deleted successfully!');
    }
}
