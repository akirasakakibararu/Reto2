<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Curso 1 del ciclo INDW3
        DB::table('formaciones')->insert([
            ['ciclo_id' => 'INDW3', 'modulo_id' => '0483', 'curso_id' => 1],
            ['ciclo_id' => 'INDW3', 'modulo_id' => '0484', 'curso_id' => 1],
            ['ciclo_id' => 'INDW3', 'modulo_id' => '0485', 'curso_id' => 1],
            ['ciclo_id' => 'INDW3', 'modulo_id' => '0373', 'curso_id' => 1],
            ['ciclo_id' => 'INDW3', 'modulo_id' => '0487', 'curso_id' => 1],
            ['ciclo_id' => 'INDW3', 'modulo_id' => 'E200', 'curso_id' => 1],

            // Curso 2 del ciclo INDW3
            ['ciclo_id' => 'INDW3', 'modulo_id' => '0612', 'curso_id' => 2],
            ['ciclo_id' => 'INDW3', 'modulo_id' => '0613', 'curso_id' => 2],
            ['ciclo_id' => 'INDW3', 'modulo_id' => '0614', 'curso_id' => 2],
            ['ciclo_id' => 'INDW3', 'modulo_id' => '0615', 'curso_id' => 2],

            // Curso 1 del ciclo INDM3
            ['ciclo_id' => 'INDM3', 'modulo_id' => '0483', 'curso_id' => 1],
            ['ciclo_id' => 'INDM3', 'modulo_id' => '0484', 'curso_id' => 1],
            ['ciclo_id' => 'INDM3', 'modulo_id' => '0485', 'curso_id' => 1],
            ['ciclo_id' => 'INDM3', 'modulo_id' => '0373', 'curso_id' => 1],
            ['ciclo_id' => 'INDM3', 'modulo_id' => '0487', 'curso_id' => 1],
            ['ciclo_id' => 'INDM3', 'modulo_id' => 'E200', 'curso_id' => 1],

            // Curso 2 del ciclo INDM3
            ['ciclo_id' => 'INDM3', 'modulo_id' => '0486', 'curso_id' => 2],
            ['ciclo_id' => 'INDM3', 'modulo_id' => '0488', 'curso_id' => 2],
            ['ciclo_id' => 'INDM3', 'modulo_id' => '0489', 'curso_id' => 2],
            ['ciclo_id' => 'INDM3', 'modulo_id' => '0490', 'curso_id' => 2],
            ['ciclo_id' => 'INDM3', 'modulo_id' => '0491', 'curso_id' => 2],

            // Curso 1 del ciclo INAR3
            ['ciclo_id' => 'INAR3', 'modulo_id' => '0369', 'curso_id' => 1],
            ['ciclo_id' => 'INAR3', 'modulo_id' => '0370', 'curso_id' => 1],
            ['ciclo_id' => 'INAR3', 'modulo_id' => '0372', 'curso_id' => 1],
            ['ciclo_id' => 'INAR3', 'modulo_id' => '0373', 'curso_id' => 1],

            // Curso 2 del ciclo INAR3
            ['ciclo_id' => 'INAR3', 'modulo_id' => '0371', 'curso_id' => 2],
            ['ciclo_id' => 'INAR3', 'modulo_id' => '0374', 'curso_id' => 2],
            ['ciclo_id' => 'INAR3', 'modulo_id' => '0375', 'curso_id' => 2],
            ['ciclo_id' => 'INAR3', 'modulo_id' => '0376', 'curso_id' => 2],
            ['ciclo_id' => 'INAR3', 'modulo_id' => '0377', 'curso_id' => 2],
            ['ciclo_id' => 'INAR3', 'modulo_id' => '0378', 'curso_id' => 2],
        ]);
    }
}
