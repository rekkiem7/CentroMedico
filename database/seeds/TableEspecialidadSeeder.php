<?php

use Illuminate\Database\Seeder;

class TableEspecialidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Especialidad::class)->create([
            'nombre'=>'Medicina General',
            'id_clinica'=>1,
            'visible'=>1
        ]);

        factory(App\Especialidad::class)->create([
            'nombre'=>'Kinesiología',
            'id_clinica'=>1,
            'visible'=>1
        ]);

        factory(App\Especialidad::class)->create([
            'nombre'=>'Odontología',
            'id_clinica'=>2,
            'visible'=>1
        ]);

        factory(App\Especialidad::class)->create([
            'nombre'=>'Traumatología',
            'id_clinica'=>2,
            'visible'=>1
        ]);
    }
}
