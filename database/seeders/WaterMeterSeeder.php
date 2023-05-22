<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\WaterMeter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WaterMeterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::take(10)
            ->each(function ($user, $key) {
                WaterMeter::create([
                    'user_id' => $user->id,
                    'start_meter' => 0
                ]);
            });
    }
}
