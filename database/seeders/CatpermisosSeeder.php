<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Catpermisos;


class CatpermisosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $catpermisos = new Catpermisos;
        $catpermisos-> tNombre = 'Leer';
        $catpermisos-> tNombreCorto = 'R';
        $catpermisos->save();

        $catpermisos1 = new Catpermisos;
        $catpermisos1-> tNombre = 'Clear';
        $catpermisos1-> tNombreCorto = 'C';
        $catpermisos1->save();

        $catpermisos2 = new Catpermisos;
        $catpermisos2-> tNombre = 'Eliminar';
        $catpermisos2-> tNombreCorto = 'D';
        $catpermisos2->save();
    }
}
