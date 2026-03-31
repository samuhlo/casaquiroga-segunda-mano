<?php

declare(strict_types=1);

use App\Enums\SellStatus;
use App\Filament\Employee\Resources\SecondHandMachines\Pages\ListSecondHandMachines;
use App\Filament\Employee\Resources\SecondHandMachines\Pages\ViewSecondHandMachine;
use App\Models\SecondHandMachine;
use App\Models\User;
use Filament\Facades\Filament;
use Illuminate\Foundation\Testing\LazilyRefreshDatabase;

use function Pest\Livewire\livewire;

uses(LazilyRefreshDatabase::class);

describe('Employee SecondHandMachineResource', function () {

    beforeEach(function () {
        $this->actingAs(User::factory()->employee()->create());

        Filament::setCurrentPanel(
            Filament::getPanel('employee')
        );
    });

    it('employee can list second hand machines', function () {
        $machines = SecondHandMachine::factory()->count(2)->create();

        livewire(ListSecondHandMachines::class)
            ->assertOk()
            ->assertCanSeeTableRecords($machines);
    });

    it('can view the second hand machine', function () {
        $machine = SecondHandMachine::factory()->create();

        livewire(ViewSecondHandMachine::class, ['record' => $machine->id])
            ->assertOk();
    });

    it('can edit status and create a note', function () {
        $machine = SecondHandMachine::factory()->create([
            'sell_status' => SellStatus::Available,
        ]);

        $livewire = livewire(ViewSecondHandMachine::class, [
            'record' => $machine->id,
        ]);

        $livewire->mountAction('edit');

        $livewire->assertActionMounted('edit');

        $livewire->assertMountedActionModalSee([
            'new_note',
            'sell_status',
        ]);

        $livewire->fillForm([
            'sell_status' => SellStatus::Sold,
            'new_note' => 'Nueva nota de prueba',
        ])
            ->callMountedAction();

        $machine->refresh();

        expect($machine->sell_status)->toBe(SellStatus::Sold);

        $note = $machine->notes->last();

        expect($note)->not->toBeNull();
        expect($note->description)->toBe('Nueva nota de prueba');
    });
});
