<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
        $this->call(TableRegionSeeder::class);
        $this->call(TableComunaSeeder::class);
        $this->call(TableClinicaSeeder::class);
        $this->call(TableEspecialidadSeeder::class);
        $this->call(TableEspecialistaSeeder::class);
        $this->call(TablePlanificacionHoraSeeder::class);
        Model::reguard();
    }
}
