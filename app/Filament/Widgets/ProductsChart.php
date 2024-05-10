<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Product;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class ProductsChart extends ChartWidget
{
    protected static ?string $heading = 'Chart';

    protected function getData(): array
    {
        // $data = Trend::model(Product::class)
        //     ->between(
        //         start: now()->subYear(),
        //         end: now(),
        //     )
        //     ->perMonth()
        //     ->count();
        return [
            'datasets' => [
                [
                    'label' => 'Products',
                    // 'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
                    'data' => [12],
                ],
            ],
            'labels' => ['product'],
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
