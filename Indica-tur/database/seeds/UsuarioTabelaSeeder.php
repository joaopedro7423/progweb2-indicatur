<?php

use Illuminate\Database\Seeder;

class UsuarioTabelaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Usuario::class, 5)->create()->each(function($u) {
            $u->indicados()->save(factory(App\Indicado::class)->make());
          });
    }
}
