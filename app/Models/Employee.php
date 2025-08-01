<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Livewire\WithPagination;

class Employee extends Model
{
    /** @use HasFactory<\Database\Factories\EmployeeFactory> */
    use HasFactory, WithPagination;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'company_id',
    ];

    public function company(): BelongsTo {
        return $this->belongsTo(Company::class);
    }
}
