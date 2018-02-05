<?php

use Illuminate\Database\Seeder;

class EstimationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory(App\Estimation::class,50)->create();
    }
}
