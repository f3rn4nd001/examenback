<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Relusuariosubmenu;

class RelusuariosubmenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $relusuariosubmenu = new Relusuariosubmenu;
        $relusuariosubmenu-> ecodUsuario = 'Administrador1';
        $relusuariosubmenu-> ecodSubMenu  = 1;
        $relusuariosubmenu-> ecodMenu   = 1;
        $relusuariosubmenu-> ecodPermisos   = 3;
        $relusuariosubmenu-> ecodController   = 1;
        $relusuariosubmenu->save();

        $relusuariosubmenu1 = new Relusuariosubmenu;
        $relusuariosubmenu1-> ecodUsuario = 'Administrador1';
        $relusuariosubmenu1-> ecodSubMenu = 1;
        $relusuariosubmenu1-> ecodMenu = 1;
        $relusuariosubmenu1-> ecodPermisos = 3;
        $relusuariosubmenu1-> ecodController = 2;
        $relusuariosubmenu1->save();

        $relusuariosubmenu2 = new Relusuariosubmenu;
        $relusuariosubmenu2-> ecodUsuario = 'Administrador1';
        $relusuariosubmenu2-> ecodSubMenu = 2;
        $relusuariosubmenu2-> ecodMenu = 1;
        $relusuariosubmenu2-> ecodPermisos = 3;
        $relusuariosubmenu2->save();
    }
}
