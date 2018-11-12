<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome_usuario', 
        'username',  
        'senha_usuario',
        'cpf_usuario',
        'telefone_usuario',
        'email_usuario',
        'pontuacao_usuario',
        'indicados',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'senha', 'remember_token',
    ];

    public function indicados()
    {
        return $this->hasMany('App\Indicado');
    }
}
