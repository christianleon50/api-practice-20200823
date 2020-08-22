<?php

use Illuminate\Database\Seeder;
use App\Worker;
use Faker\Factory as Faker;

class workerTableSeeder extends Seeder
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
            $worker=Worker::create([
                'name'=>$faker->name,
                'lastname'=>$faker->lastname,
                'email'=>$faker->email,
                'phone'=>$faker->phoneNumber,
                'address'=>$faker->address,
                'available'=>$faker->boolean
            ]);
        }
    }
}
