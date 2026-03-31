<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Enums\Status;
use App\Models\Notes;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Notes>
 */
class NotesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $previous = $this->faker->randomElement(Status::cases());

        $new = $this->faker->randomElement(
            array_filter(
                Status::cases(),
                fn ($case) => $case !== $previous
            )
        );

        return [
            'descripcion' => $this->faker->paragraph(),
            'previous_state' => $previous,
            'new_state' => $new,
        ];
    }
}
