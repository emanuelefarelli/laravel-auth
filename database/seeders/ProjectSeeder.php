<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 30; $i++){
            $newProject = new Project();
            $newProject->title = $faker->word();
            $newProject->description = $faker->paragraphs(2,true);
            $newProject->group_name = $faker->word();
            $newProject->started_at = $faker->date('Y_m_d');
            $newProject->finished_at = $faker->date('Y_m_d');
            $newProject->final_score = $faker->randomDigit();
            $newProject->save();
        }
    }
}
