<?php

namespace App\Filament\Admin\Resources\ResResource\Pages;

use App\Filament\Admin\Resources\ResResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRes extends ListRecords
{
    protected static string $resource = ResResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
