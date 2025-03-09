<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use HasFactory,softDeletes;

   protected $fillable=[
       'names',
       'surnames',
       'cell_phone',
       'card_number',
       'bank_name',
       'bank_branch',
       'account_number',
       'account_type',
       'email',
       'address',
       'gender',
       'nrc_number',
       'password'
   ];

    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class);
    }
}
