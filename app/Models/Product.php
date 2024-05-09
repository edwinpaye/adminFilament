<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'products';

    protected $primaryKey = 'id';

    public $incrementing = false;

    protected $fillable = ['name', 'description'];

    public function galleries(): HasMany
    {
        return $this->hasMany(Gallery::class, 'product_id');
    }
}
