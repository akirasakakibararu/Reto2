<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('modulos')->insert([
            ["modulo_id" => "0483", "modulo_nombre" => "Sistemas informáticos", "modulo_horas_totales" => 165],
            ["modulo_id" => "0484", "modulo_nombre" => "Bases de datos", "modulo_horas_totales" => 198],
            ["modulo_id" => "0485", "modulo_nombre" => "Programación", "modulo_horas_totales" => 264],
            ["modulo_id" => "0373", "modulo_nombre" => "Lenguajes de marcas y sistemas de gestión de información", "modulo_horas_totales" => 132],
            ["modulo_id" => "0487", "modulo_nombre" => "Entornos de desarrollo", "modulo_horas_totales" => 99],
            ["modulo_id" => "0486", "modulo_nombre" => "Acceso a datos", "modulo_horas_totales" => 120],
            ["modulo_id" => "0488", "modulo_nombre" => "Desarrollo de interfaces", "modulo_horas_totales" => 140],
            ["modulo_id" => "0489", "modulo_nombre" => "Programación multimedia y dispositivos móviles", "modulo_horas_totales" => 100],
            ["modulo_id" => "0490", "modulo_nombre" => "Programación de servicios y procesos", "modulo_horas_totales" => 80],
            ["modulo_id" => "0491", "modulo_nombre" => "Sistemas de gestión empresarial", "modulo_horas_totales" => 100],
            ["modulo_id" => "0492", "modulo_nombre" => "Proyecto de desarrollo de aplicaciones multiplataforma", "modulo_horas_totales" => 50],
            ["modulo_id" => "E200", "modulo_nombre" => "Inglés técnico", "modulo_horas_totales" => 33],
            ["modulo_id" => "0493", "modulo_nombre" => "Formación y orientación laboral", "modulo_horas_totales" => 99],
            ["modulo_id" => "0494", "modulo_nombre" => "Empresa e iniciativa emprendedora", "modulo_horas_totales" => 60],
            ["modulo_id" => "0495", "modulo_nombre" => "Formación en centros de trabajo", "modulo_horas_totales" => 360],
            ["modulo_id" => "0612", "modulo_nombre" => "Desarrollo web en entorno cliente", "modulo_horas_totales" => 140],
            ["modulo_id" => "0613", "modulo_nombre" => "Desarrollo web en entorno servidor", "modulo_horas_totales" => 180],
            ["modulo_id" => "0614", "modulo_nombre" => "Despliegue de aplicaciones web", "modulo_horas_totales" => 100],
            ["modulo_id" => "0615", "modulo_nombre" => "Diseño de interfaces web", "modulo_horas_totales" => 120],
            ["modulo_id" => "0616", "modulo_nombre" => "Proyecto de desarrollo de aplicaciones web", "modulo_horas_totales" => 50],
        ]);
    }
}
