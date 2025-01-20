<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CicloFormativoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ciclo_formativos')->insert([
            ['ciclo_id' => 'INDM3', 'ciclo_nombre' => 'Desarrollo de Aplicaciones Multiplataforma'],
            ['ciclo_id' => 'INDW3', 'ciclo_nombre' => 'Desarrollo de Aplicaciones Web'],
            ['ciclo_id' => 'INAR3', 'ciclo_nombre' => 'Administración de sistemas informáticos en red']
        ]);
    }
}
