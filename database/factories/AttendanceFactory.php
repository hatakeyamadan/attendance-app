<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Attendance;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Attendance>
 */
class AttendanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        do {
            $date = $this->faker->dateTimeBetween('-6 months', 'now');
            $dayOfWeek = $date->format('N');
        } while ($dayOfWeek >= 6);

        return [
            'date' => $date->format('Y-m-d'),
            'clock_in' => '09:00:00',
            'clock_out' => '18:00:00',
        ];
    }
}
