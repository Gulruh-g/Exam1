<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $objs = [
            [null, 'UNW'],
            [null, 'ANW'],
            [1, 'A1'],
            [1, 'B1'],
            [1, 'A2'],
            [1, 'B2'],
            [1, 'A3'],
            [1, 'B3'],
            [1, 'A4'],
            [1, 'B4'],
            [1, 'A5'],
            [1, 'B5'],
            [2, 'C1'],
            [2, 'C2'],
            [2, 'C3'],
            [2, 'D2'],
            [2, 'E2'],
            [2, 'D4'],
            [2, 'D5'],
            [2, 'C4'],
            [2, 'E3'],
            [2, 'E4'],
        ];

        foreach ($objs as $obj) {
            Location::create([
                'parent_id' => $obj[0],
                'name' => $obj[1],
            ]);
        }
    }
}
