<?php

use App\Equipo;
use Illuminate\Database\Seeder;

class EquipoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Manera correcta
        Equipo::create(['nombre_equipo' => 'Prog. Internet']);
        Equipo::create(['nombre_equipo' => 'Est. de Datos']);
    }
}
