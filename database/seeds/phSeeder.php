<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class phSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $date = now(); // helper for Carbon::now()

        foreach (range(1, 480) as $i) { // 8*60 minutes
        
            //do something with $date
            DB::table('data_ph')->insert([
               'ph' => rand(0, 14),
               'timestamp' => $date
            ]);
        
            $date->addMinute(); // increments by a minute
        }
    }
}
