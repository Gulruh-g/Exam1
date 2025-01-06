<?php

namespace Database\Seeders;

use App\Models\Season;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $objs = ['Winter', 'Spring', 'Summer', 'Autumn'];

        foreach ($objs as $obj) {
            Season::create(['name' => $obj]);
        }
    }
}
