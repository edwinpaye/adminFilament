<?php

namespace App\Filament\Widgets;

use App\Models\Gallery;
use App\Models\GalleryItem;
use App\Models\Product;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ProductTypeOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total de Productos', Product::query()->count()),
            Stat::make('Total de Galerias', Gallery::query()->count()),
            Stat::make('Total de Imagenes', GalleryItem::query()->count()),
        ];
    }
}
