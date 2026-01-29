<?php

namespace App\Filament\Admin\Resources\ResResource\Pages;

use App\Filament\Admin\Resources\ResResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRes extends EditRecord
{
    protected static string $resource = ResResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
