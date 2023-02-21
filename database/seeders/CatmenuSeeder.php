<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Catmenu;

class CatmenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $catmenu = new Catmenu;
        $catmenu-> tNombre = 'Catalogo';
        $catmenu->save();
    }
}
