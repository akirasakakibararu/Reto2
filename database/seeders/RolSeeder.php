<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            ["rol_nombre" => "god", "created_at" => now(), "updated_at" => now()],
            ["rol_nombre" => "estudiante", "created_at" => now(), "updated_at" => now()],
            ["rol_nombre" => "administrador", "created_at" => now(), "updated_at" => now()],
            ["rol_nombre" => "profesor", "created_at" => now(), "updated_at" => now()],
        ]);
    }
}
