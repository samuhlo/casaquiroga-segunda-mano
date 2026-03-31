<?php

declare(strict_types=1);

use App\Models\Brand;
use App\Models\Family;
use App\Models\Notes;
use App\Models\SecondHandMachine;
use App\Models\User;
use Illuminate\Foundation\Testing\LazilyRefreshDatabase;

uses(LazilyRefreshDatabase::class);

describe('DatabaseSeeder', function () {
    it('seeds the database without errors', function () {
        $this->seed();

        expect(User::count())->toBeGreaterThan(0);
        expect(SecondHandMachine::count())->toBeGreaterThan(0);
        expect(Notes::count())->toBeGreaterThan(0);
        expect(Brand::count())->toBeGreaterThan(0);
        expect(Family::count())->toBeGreaterThan(0);
    });
});
