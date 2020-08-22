<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(labor_profileTableSeeder::class);
        $this->call(work_experienceTableSeeder::class);
        $this->call(workerTableSeeder::class);
    }
}
