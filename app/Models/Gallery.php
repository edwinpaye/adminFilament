<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Gallery extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'galleries';

    protected $primaryKey = 'id';

    public $incrementing = false;

    protected $fillable = ['name', 'description', 'product_id', 'gallery_items'];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function gallery_items(): HasMany
    {
        return $this->hasMany(GalleryItem::class, 'gallery_id');
    }
}
