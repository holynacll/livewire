<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\TipoInstituicao;

class Instituicao extends Model
{
    use HasFactory;

    public $table = 'instituicoes';
    protected $fillable = [
        'descricao',
        'tipo_instituicao_id',
    ];
    
    // RELACIONAMENTOS
    public function tipo()
    {
        return $this->belongsTo(TipoInstituicao::class, 'tipo_instituicao_id', 'id');
    }

}
