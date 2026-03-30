<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Familia;
use App\Models\Marca;
use App\Models\SecondHandMachine;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        Familia::factory(3)->create();

        Marca::factory(3)->create();

        SecondHandMachine::factory(10)->create();
    }
}
