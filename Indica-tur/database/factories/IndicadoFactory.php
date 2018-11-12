<?php

use Faker\Generator as Faker;
use App\Indicado as Indicado;

$factory->define(Indicado::class, function (Faker $faker) {    
    return [
        'nome_indicado' => $faker->name,
        'cpf_indicado' => '02753608229',
        'telefone_indicado' => $faker->phoneNumber,
        'email_indicado' => $faker->unique()->safeEmail, 
        //'indicado_por_id' => factory(App/Usuario::class),  
    ];
});
