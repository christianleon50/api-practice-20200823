<?php

use Illuminate\Database\Seeder;
use App\Work_experience;
use Faker\Factory as Faker;

class work_experienceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();

        for ($i=0 ; $i < 50 ; $i++) {            
            $workxp=Work_experience::create([
                'last_job'=>$faker->jobTitle,
                'activity'=>$faker->lexify('??????????'),
                'start_date'=>$faker->date,
                'end_date'=>$faker->date
            ]);
        }
    }
}
