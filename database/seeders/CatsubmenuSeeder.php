<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Catsubmenu;

class CatsubmenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $catsubmenu = new Catsubmenu;
        $catsubmenu-> tNombre = 'Usuarios';
        $catsubmenu-> url = 'Catalogo/usuarios/Consulta';
        $catsubmenu->save();

        $catsubmenu2 = new Catsubmenu;
        $catsubmenu2-> tNombre = 'Menu SubMenus';
        $catsubmenu2-> url = 'Catalogo/MenuSubmenu/Consulta';
        $catsubmenu2->save();

        }
}