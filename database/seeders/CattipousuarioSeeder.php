<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cattipousuario;

class CattipousuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cattipousuario = new Cattipousuario;
        $cattipousuario-> tNombre = 'Cliente';
        $cattipousuario->save();
        $cattipousuario = new Cattipousuario;
        $cattipousuario-> tNombre = 'Administrador';
        $cattipousuario->save();
    }
}
