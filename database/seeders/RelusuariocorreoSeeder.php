<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Relusuariocorreo;

class RelusuariocorreoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $relusuariocorreo = new Relusuariocorreo;
        $relusuariocorreo-> ecodUsuario = 'Administrador1';
        $relusuariocorreo-> ecodCorreo = 1;
        $relusuariocorreo->save();
    }
}
