<?php

namespace App\Http\Controllers;
use App\Http\Controllers\RoleController;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    protected $fillable = ['name'];

    //many to many: a dept has many roles
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
    public function index()
{
    $departments = Department::with('roles')->get();
    return view('departments.index', compact('departments'));
}

public function create()
{
    $roles = Role::all(); // to assign roles when creating dept
    return view('departments.create', compact('roles'));
}

public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|unique:departments,name',
        'roles' => 'array|exists:roles,id',
    ]);

    $dept = Department::create(['name' => $request->name]);
    $dept->roles()->sync($request->roles); // attach roles

    return redirect()->route('departments.index');
}

}
