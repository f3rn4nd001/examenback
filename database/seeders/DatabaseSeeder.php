<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CatestatusSeeder::class);  
        $this->call(CattipousuarioSeeder::class);  
        $this->call(BitcorreosSeeder::class);  
        $this->call(CatcontrollerSeeder::class);  
        $this->call(CatmenuSeeder::class);  
        $this->call(CatpermisosSeeder::class);  
        $this->call(CatsubmenuSeeder::class);  
        $this->call(CatusuariosSeeder::class);  
        $this->call(RelmenusubmenuSeeder::class);
        $this->call(RelusuariocorreoSeeder::class);
        $this->call(RelusuariosubmenuSeeder::class);
    }
}
