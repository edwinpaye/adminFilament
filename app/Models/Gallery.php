<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $table = 'galleries';

    protected $primaryKey = 'id';

    public $incrementing = false;

    protected $fillable = ['name', 'description', 'product_id'];

    // protected $casts = [
    //     'gallery_items' => 'array',
    // ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function gallery_items(): HasMany
    {
        return $this->hasMany(GalleryItem::class, 'gallery_id');
    }
}
