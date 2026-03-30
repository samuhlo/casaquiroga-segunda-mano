<?php

declare(strict_types=1);

use App\Filament\Admin\Resources\Brands\Pages\CreateBrand;
use App\Filament\Admin\Resources\Brands\Pages\EditBrand;
use App\Filament\Admin\Resources\Brands\Pages\ListBrands;
use App\Models\Brand;
use Illuminate\Foundation\Testing\LazilyRefreshDatabase;
use function Pest\Livewire\livewire;

uses(LazilyRefreshDatabase::class);

describe('BrandResource', function () {
    it('can load the Brands list page and display records', function () {
        $Brands = Brand::factory()->count(3)->create();

        livewire(ListBrands::class)
            ->assertOk()
            ->assertCanSeeTableRecords($Brands);
    });


    it('can create a Brand', function () {
        livewire(CreateBrand::class)
            ->fillForm([
                'nombre' => 'Test Brand',
            ])
            ->call('create')
            ->assertHasNoFormErrors()
            ->assertNotified();

        expect(Brand::where('nombre', 'Test Brand')->exists())->toBeTrue();
    });

    it('can edit a Brand', function () {
        $Brand = Brand::factory()->create(['nombre' => 'Old Name']);

        livewire(EditBrand::class, ['record' => $Brand->id])
            ->fillForm([
                'nombre' => 'New Name',
            ])
            ->call('save')
            ->assertHasNoFormErrors()
            ->assertNotified();

        expect($Brand->refresh()->nombre)->toBe('New Name');
    });
});
