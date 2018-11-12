<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Indicado extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome_indicado',
        'cpf_indicado', 
        'telefone_indicado',
        'email_indicado',
        'indicado_por_id',
    ];

    public function indicado_por_id()
    {
        return $this->belongsTo('App\Usuario');
    }
}
