<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Gallery extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'galleries';

    protected $primaryKey = 'id';

    public $incrementing = false;

    protected $fillable = ['name', 'description'];

    public function catalogo(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
