<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use SoftDeletes;
    protected $fillable = ['name', 'commission_rate'];

    public function sellers(): HasMany {
        return $this->hasMany(  Seller::class);
    }
}
