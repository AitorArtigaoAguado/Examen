<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alumnos')->insert([
            'nombre'=> 'Pedro',
            'apellidos'=> 'Fernandez',
            'DNI'=> '12345678A'
        ]);
        DB::table('alumnos')->insert([
            'nombre'=> 'Alberto',
            'apellidos'=> 'Rodriguez',
            'DNI'=> '87654321A'
        ]);
        DB::table('alumnos')->insert([
            'nombre'=> 'Paco',
            'apellidos'=> 'Gonzalez',
            'DNI'=> '92749274G'
        ]);
    }
}
