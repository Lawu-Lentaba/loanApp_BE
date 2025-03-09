<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reversal extends Model
{
    /** @use HasFactory<\Database\Factories\ReversalFactory> */
    use HasFactory,softDeletes;

    public function loan(): BelongsTo
    {
        return $this->belongsTo(Loan::class);
    }
}
