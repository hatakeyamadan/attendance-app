<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Attendance;
use App\Models\Rest;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
        ]);

        $users = User::all();

        foreach ($users as $user) {
            Attendance::factory()
                ->count(75) // 例: 平日75日分
                ->create([
                    'user_id' => $user->id,
                ])
                ->each(function ($attendance) {
                    Rest::factory()->create([
                        'attendance_id' => $attendance->id,
                    ]);
                });
        }
    }
}
