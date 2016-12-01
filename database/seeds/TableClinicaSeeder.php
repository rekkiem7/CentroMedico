<?php

use Illuminate\Database\Seeder;

class TableClinicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Clinica::class)->create([
            'nombre'=>'Clinica Sucursal El Bosque',
            'id_comuna'=>283,
            'visible'=>1
        ]);

        factory(App\Clinica::class)->create([
            'nombre'=>'Clinica Sucursal Providencia',
            'id_comuna'=>301,
            'visible'=>1
        ]);
    }
}
