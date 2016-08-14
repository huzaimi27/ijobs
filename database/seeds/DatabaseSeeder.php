<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        // $this->call(UsersTableSeeder::class);
        $this->call(ProvinsiTableSeeder::class); 
        $this->call(KotaTableSeeder::class); 
        $this->call(KecamatanTableSeeder::class); 
        // $this->call(KelurahanTableSeeder::class); 
    }
}
