<?php

use Illuminate\Database\Seeder;

class TableEspecialistaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Especialista::class)->create([
            'nombre'=>'Pablo Barría Reyes',
            'id_especialidad'=>1,
            'visible'=>1
        ]);

        factory(App\Especialista::class)->create([
            'nombre'=>'Eduardo Vidal Troncoso',
            'id_especialidad'=>1,
            'visible'=>1
        ]);

        factory(App\Especialista::class)->create([
            'nombre'=>'Mitchel Novoa Quiroz',
            'id_especialidad'=>2,
            'visible'=>1
        ]);
    }
}
