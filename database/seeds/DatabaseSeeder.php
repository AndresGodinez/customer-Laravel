<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(PatientsTableSeeder::class);
        $this->call(EstimationsTableSeeder::class);
        $this->call(ExpedientsTableSeeder::class);
        $this->call(PaymentsTableSeeder::class);
        $this->call(PrescriptionsTableSeeder::class);
        $this->call(TreatmentsTableSeeder::class);
    }
}
