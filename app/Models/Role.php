<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Department;
use App\Models\Employee;

class Role extends Model
{
    protected $fillable = ['name'];

    // A role can belong to many departments
    public function departments()
    {
        return $this->belongsToMany(Department::class, 'department_role');
    }

    // A role can belong to many employees
    public function employees()
    {
        return $this->belongsToMany(Employee::class, 'employee_role');
    }
}
