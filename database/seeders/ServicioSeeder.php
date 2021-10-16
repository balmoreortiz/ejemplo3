<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('servicios')->insert([
            'name' => 'servicio 1',
            'detail' => 'detalle servicio 1',
            'price' => 30.5,
        ]);
    }
}
