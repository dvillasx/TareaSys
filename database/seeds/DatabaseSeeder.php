<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoriasTableSeeder::class);
        $this->call(EquipoTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
