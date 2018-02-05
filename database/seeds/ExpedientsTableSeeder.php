<?php

use Illuminate\Database\Seeder;

class ExpedientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Expedient::class, 50)->create();
    }
}
