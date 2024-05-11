<?php

namespace App\Filament\Resources\GalleryResource\Pages;

use App\Filament\Resources\GalleryResource;
use App\Models\GalleryItem;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
// use Illuminate\Support\Facades\Log;

class CreateGallery extends CreateRecord
{
    protected static string $resource = GalleryResource::class;

    protected function afterCreate(): void
    {
        $uploadedImages = [];
        foreach ($this->form->getState()['gallery_items'] as $imagePath) {
            $uploadedImages[] = new GalleryItem(["image" => $imagePath]);
        }
        // Log::info('images', ["data" => $uploadedImages]);
        $this->getRecord()->gallery_items()->saveMany($uploadedImages);
    }

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Galeria registrada')
            ->body('La galeria ha sido creada exitosamente.');
    }
}
