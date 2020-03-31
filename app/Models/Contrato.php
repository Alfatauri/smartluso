<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    protected $dateFormat = 'd/m/yy H:i:s';
    protected $fillable = [
        'dtAprovação',
        'skCliente',
        'Categoria',
        'Descrição',
        'skGerente',
        'Segmento',
        'skTipoProposta',
        'skGrupo',
        'Regional',
        'Validade',
        'ValorAprovado',
        'Limite_Utilizado',
        'Probabilidade_Saque',
        'Previsão_Saque',
        'Observações',
    ];
}
