<?php

use Illuminate\Database\Seeder;

class IndicadoTabelaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Indicado::class, 5)->create()->each(function($u) {
            $u->indicado_por_id()->save(factory(App\Usuario::class)->make());
          });
    }
}
