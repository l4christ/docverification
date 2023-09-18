<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Doc extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'path',
    ];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
