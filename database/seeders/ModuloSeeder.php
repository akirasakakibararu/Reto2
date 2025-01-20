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
            ['modulo_id' => '0483', 'modulo_nombre' => 'Sistemas informáticos', 'modulo_horasTotales' => 165],
            ['modulo_id' => '0484', 'modulo_nombre' => 'Bases de datos', 'modulo_horasTotales' => 198],
            ['modulo_id' => '0485', 'modulo_nombre' => 'Programación', 'modulo_horasTotales' => 264],
            ['modulo_id' => '0373', 'modulo_nombre' => 'Lenguajes de marcas y sistemas de gestión de información', 'modulo_horasTotales' => 132],
            ['modulo_id' => '0487', 'modulo_nombre' => 'Entornos de desarrollo', 'modulo_horasTotales' => 99],
            ['modulo_id' => '0486', 'modulo_nombre' => 'Acceso a datos', 'modulo_horasTotales' => 120],
            ['modulo_id' => '0488', 'modulo_nombre' => 'Desarrollo de interfaces', 'modulo_horasTotales' => 140],
            ['modulo_id' => '0489', 'modulo_nombre' => 'Programación multimedia y dispositivos móviles', 'modulo_horasTotales' => 100],
            ['modulo_id' => '0490', 'modulo_nombre' => 'Programación de servicios y procesos', 'modulo_horasTotales' => 80],
            ['modulo_id' => '0491', 'modulo_nombre' => 'Sistemas de gestión empresarial', 'modulo_horasTotales' => 100],
            ['modulo_id' => 'E200', 'modulo_nombre' => 'Inglés técnico', 'modulo_horasTotales' => 33],
            ['modulo_id' => '0493', 'modulo_nombre' => 'Formación y orientación laboral', 'modulo_horasTotales' => 99],
            ['modulo_id' => '0494', 'modulo_nombre' => 'Empresa e iniciativa emprendedora', 'modulo_horasTotales' => 60],
            ['modulo_id' => '0495', 'modulo_nombre' => 'Formación en centros de trabajo', 'modulo_horasTotales' => 360],
            ['modulo_id' => '0612', 'modulo_nombre' => 'Desarrollo web en entorno cliente', 'modulo_horasTotales' => 140],
            ['modulo_id' => '0613', 'modulo_nombre' => 'Desarrollo web en entorno servidor', 'modulo_horasTotales' => 180],
            ['modulo_id' => '0614', 'modulo_nombre' => 'Despliegue de aplicaciones web', 'modulo_horasTotales' => 100],
            ['modulo_id' => '0615', 'modulo_nombre' => 'Diseño de interfaces web', 'modulo_horasTotales' => 120],
            ['modulo_id' => '0369', 'modulo_nombre' => 'Implantación de sistemas operativos', 'modulo_horasTotales' => 264],
            ['modulo_id' => '0370', 'modulo_nombre' => 'Planificación y administración de redes', 'modulo_horasTotales' => 198],
            ['modulo_id' => '0371', 'modulo_nombre' => 'Fundamentos de hardware', 'modulo_horasTotales' => 99],
            ['modulo_id' => '0372', 'modulo_nombre' => 'Gestión de bases de datos', 'modulo_horasTotales' => 198],
            ['modulo_id' => '0374', 'modulo_nombre' => 'Administración de sistemas operativos', 'modulo_horasTotales' => 120],
            ['modulo_id' => '0375', 'modulo_nombre' => 'Servicios de red e internet', 'modulo_horasTotales' => 120],
            ['modulo_id' => '0376', 'modulo_nombre' => 'Implantación de aplicaciones web', 'modulo_horasTotales' => 100],
            ['modulo_id' => '0377', 'modulo_nombre' => 'Administración de sistemas gestores de bases de datos', 'modulo_horasTotales' => 60],
            ['modulo_id' => '0378', 'modulo_nombre' => 'Seguridad y alta disponibilidad', 'modulo_horasTotales' => 100]
        ]);
    }
}
