<?php

namespace Database\Seeders;

use App\Models\Lesson;
use App\Models\Location;
use App\Models\Registration;
use App\Models\Season;
use App\Models\Student;
use App\Models\Teacher;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

       $this->call([
           SeasonSeeder::class,
           LocationSeeder::class,
           CourseSeeder::class,
       ]);

       Student::factory(100)->create();
       Teacher::factory(10)->create();
       Lesson::factory(30)->create();
       Registration::factory(200)->create();
    }
}
