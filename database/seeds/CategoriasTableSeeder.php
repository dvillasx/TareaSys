<?php

use App\Categoria;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //No usar esto demasiado
        // DB::table('categorias')->insert(['nombre_categoria' => 'Personal']);
        // DB::table('categorias')->insert(['nombre_categoria' => 'Escuela']);

        //Manera correcta
        Categoria::create(['nombre_categoria' => 'Personal']);
        Categoria::create(['nombre_categoria' => 'Escuela']);
        Categoria::create(['nombre_categoria' => 'Trabajo']);
    }
}
