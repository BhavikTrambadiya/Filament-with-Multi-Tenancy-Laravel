<?php

namespace App\Filament\Store\Resources\BookResource\Pages;

use App\Filament\Store\Resources\BookResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBook extends CreateRecord
{
    protected static string $resource = BookResource::class;
}
