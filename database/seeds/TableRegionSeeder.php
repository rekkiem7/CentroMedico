<?php

use Illuminate\Database\Seeder;

class TableRegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Region::class)->create([
            'nombre'=>'Tarapacá',
            'visible'=>0
        ]);

        factory(App\Region::class)->create([
            'nombre'=>'Antofagasta',
            'visible'=>0
        ]);

        factory(App\Region::class)->create([
            'nombre'=>'Atacama',
            'visible'=>0
        ]);

        factory(App\Region::class)->create([
            'nombre'=>'Coquimbo',
            'visible'=>0
        ]);

        factory(App\Region::class)->create([
            'nombre'=>'Valparaíso',
            'visible'=>0
        ]);

        factory(App\Region::class)->create([
            'nombre'=>'O`Higgins',
            'visible'=>0
        ]);

        factory(App\Region::class)->create([
            'nombre'=>'Maule',
            'visible'=>0
        ]);

        factory(App\Region::class)->create([
            'nombre'=>'Bio-Bío',
            'visible'=>0
        ]);

        factory(App\Region::class)->create([
            'nombre'=>'La Araucanía',
            'visible'=>0
        ]);

        factory(App\Region::class)->create([
            'nombre'=>'Los Lagos',
            'visible'=>0
        ]);

        factory(App\Region::class)->create([
            'nombre'=>'Aysén',
            'visible'=>0
        ]);

        factory(App\Region::class)->create([
            'nombre'=>'Magallanes',
            'visible'=>0
        ]);

        factory(App\Region::class)->create([
            'nombre'=>'Metropolitana de Santiago',
            'visible'=>1
        ]);

        factory(App\Region::class)->create([
            'nombre'=>'Los Ríos',
            'visible'=>0
        ]);

        factory(App\Region::class)->create([
            'nombre'=>'Arica y Parinacota',
            'visible'=>0
        ]);
    }
}
