<?php

declare(strict_types=1);

namespace App\Filament\Resources\Admin\Familias\Pages;

use App\Filament\Resources\Admin\Familias\FamiliaResource;
use Filament\Resources\Pages\CreateRecord;

class CreateFamilia extends CreateRecord
{
    protected static string $resource = FamiliaResource::class;
}
