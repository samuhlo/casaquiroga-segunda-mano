<?php

declare(strict_types=1);

namespace App\Filament\Resources\Admin\SecondHandMachines\Pages;

use App\Filament\Resources\Admin\SecondHandMachines\SecondHandMachineResource;
use Filament\Resources\Pages\CreateRecord;

class CreateSecondHandMachine extends CreateRecord
{
    protected static string $resource = SecondHandMachineResource::class;
}
