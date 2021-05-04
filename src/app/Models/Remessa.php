<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\RemessaAnexo;
use App\Models\TipoRemessa;
use App\Models\instituicao;

class Remessa extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'tipo_remessa_id',
        'instituicao_id',
        'user_id',
        'data_envio'
    ];

    // RELACIONAMENTOS
    public function anexos()
    {
        return $this->hasMany(RemessaAnexo::class, 'remessa_id', 'id');
    }

    public function tipo()
    {
        return $this->belongsTo(TipoRemessa::class, 'tipo_remessa_id', 'id');
    }

    public function instituicao()
    {
        return $this->belongsTo(Instituicao::class, 'instituicao_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
