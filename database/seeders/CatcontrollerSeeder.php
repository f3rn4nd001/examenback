<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Catcontroller;

class CatcontrollerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $catcontroller = new Catcontroller;
        $catcontroller-> tNombre = 'Usuarios registro';
        $catcontroller-> url = 'Consulta/Usuario/Registrar';
        $catcontroller->save();
        $catcontroller1 = new Catcontroller;
        $catcontroller1-> tNombre = 'EliminarUsuario';
        $catcontroller1-> url = 'Consulta/Usuario/Eliminar';
        $catcontroller1->save();
    }
}

