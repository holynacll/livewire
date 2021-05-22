<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioPerfilInstituicao extends Model
{
    use HasFactory;

    public $table = 'usuario_perfil_instituicao';

    protected $fillable = [
        'user_id',
        'perfil_id',
        'instituicao_id',
        'active'
    ];


}
