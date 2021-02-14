<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $statuses = ['Waiting for approval', 'Approved', 'In progress'];
        foreach (range(1, 400) as $index) {
            DB::table('projects')->insert([
                'status' => $statuses[shuffle($statuses)],
                'deadline' => $faker->dateTimeBetween('+1 month', '+2 month'),
                'budget' => rand(10000, 500000),
            ]);
        }
    }
}
