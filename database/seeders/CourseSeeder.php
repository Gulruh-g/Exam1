<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $objs =['Computer5', 'Computer9', 'Computer10', 'Computer11', 'Elementary', 'Beginner'];

        foreach ($objs as $obj) {
            Course::create([
                'name' => $obj
            ]);
        }
    }
}
