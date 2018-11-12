<?php

use Faker\Generator as Faker;
use App\Usuario as Usuario;

$factory->define(Usuario::class, function (Faker $faker) {
    return [
        'nome_usuario' => $faker->name,
        'username' => $faker->name,
        'senha_usuario' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'cpf_usuario' => '02753608229',
        'telefone_usuario' => $faker->phoneNumber,
        'pontuacao_usuario' => $faker->randomNumber,
        //'indicados_usuario' => factory(App/Indicado::class),
        'email_usuario' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),        
        'remember_token' => str_random(10),
    ];
});
