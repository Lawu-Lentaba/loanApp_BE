<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Branch extends Model
{
    use HasFactory,softDeletes;

    protected $table = 'branches';
    protected $fillable = [
        'name',
        'contact_number',
        'email',
        'contact_number_2'
    ];

    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class);
    }
    public function clients(): HasMany
    {
        return $this->hasMany(Client::class);
    }
}
