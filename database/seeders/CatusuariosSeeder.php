<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Catusuarios;


class CatusuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $catusuarios = new Catusuarios;
        $catusuarios-> ecodUsuarios = 'Administrador1';
        $catusuarios-> tNombre = 'carlos';   
        $catusuarios-> tApellido = 'ventura';
        $catusuarios-> trfc  = 'VEMC0001112CS';
        $catusuarios-> EcodEstatus = 1;
        $catusuarios-> ecodTipoUsuario = 2;
        $catusuarios-> fCreacion = '2023-12-20';
        $catusuarios-> tPuesto = "desarrolador";
        $catusuarios -> nSarario = 29.8;
       
        $catusuarios->save();
    }
}
