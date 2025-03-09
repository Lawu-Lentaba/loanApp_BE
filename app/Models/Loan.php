<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Loan extends Model
{
    use HasFactory,softDeletes;

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function reversals(){
        return $this->hasMany(Reversal::class);
    }
}

