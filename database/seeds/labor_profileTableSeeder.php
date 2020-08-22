<?php

use Illuminate\Database\Seeder;
use App\Labor_profile;
use Faker\Factory as Faker;

class labor_profileTableSeeder extends Seeder
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
            $laborp=Labor_profile::create([
                'education'=>$faker->jobTitle,
                'collage'=>$faker->lexify('????? Collage'),
                'graduation_date'=>$faker->date
            ]);
        }
    }
}
