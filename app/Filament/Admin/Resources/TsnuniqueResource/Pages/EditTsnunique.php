<?php

namespace App\Filament\Admin\Resources\TsnuniqueResource\Pages;

use App\Filament\Admin\Resources\TsnuniqueResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTsnunique extends EditRecord
{
    protected static string $resource = TsnuniqueResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
