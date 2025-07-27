<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Department;
use App\Models\Role;

class Employee extends Model
{
    protected $fillable = ['name', 'email', 'department_id']; // Add fields as needed

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'employee_role');
    }
}
