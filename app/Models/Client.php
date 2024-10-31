<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use SoftDeletes;

    protected $fillable = ['address_id', 'user_id'];

    public function address(): HasOne
    {
        return $this->hasone(Address::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);

    }

    public function sales(): HasMany
    {
        return $this->hasMany(Sale::class);
    }
}
