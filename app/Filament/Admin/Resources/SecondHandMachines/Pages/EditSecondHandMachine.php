<?php

declare(strict_types=1);

namespace App\Filament\Resources\Admin\SecondHandMachines\Pages;

use App\Filament\Resources\Admin\SecondHandMachines\SecondHandMachineResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSecondHandMachine extends EditRecord
{
    protected static string $resource = SecondHandMachineResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
