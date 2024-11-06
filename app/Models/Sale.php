<?php

namespace App\Models;

use App\Enums\SaleStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sale extends Model
{
    use SoftDeletes, HasFactory;
    protected $fillable = [
        'seller_id',
        'client_id',
        'sold_at',
        'source',
        'status',
        'total_amount'
    ];
    
    protected $casts = [
        'status' => SaleStatus::class,
    ];

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }
    public function saller(): BelongsTo
    {
        return $this->belongsTo(Seller::class);
    }
}
