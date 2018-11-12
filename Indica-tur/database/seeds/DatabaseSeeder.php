<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UsuarioTabelaSeeder::class);
        $this->call(IndicadoTabelaSeeder::class);

        Model::reguard();
    }
}
