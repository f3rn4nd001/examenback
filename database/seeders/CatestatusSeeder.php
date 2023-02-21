<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Catestatus;

class CatestatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $catestatus = new Catestatus;
        $catestatus-> tNombre = 'Activo';
        $catestatus->save();
        $catestatus1 = new Catestatus;
        $catestatus1-> tNombre = 'Cancelado';
        $catestatus1->save();
        $catestatus2 = new Catestatus;
        $catestatus2-> tNombre = 'En proceso';
        $catestatus2->save();
        $catestatus3 = new Catestatus;
        $catestatus3-> tNombre = 'Terminado';
        $catestatus3->save();
        $catestatus4 = new Catestatus;
        $catestatus4-> tNombre = 'Eliminado';
        $catestatus4->save();
    }
}
