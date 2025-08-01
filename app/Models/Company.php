<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    /** @use HasFactory<\Database\Factories\CompanyFactory> */
    use HasFactory;

    protected $fillable = ['name', 'email', 'website'];

    public function employees() {
        return $this->hasMany(Employee::class);
    }

    public function employeeCount() {
        return $this->employees()->count();
    }
}
