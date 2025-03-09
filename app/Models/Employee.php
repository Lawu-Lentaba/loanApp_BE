<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory,softDeletes;

    public mixed $name;

    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class);
    }
}
