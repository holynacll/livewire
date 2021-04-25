<?php

namespace App\Models;

use App\Models\RemessaAnexo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Remessa extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'remessa_tipo_id',
        'data_envio'
    ];


    public function anexos()
    {
        return $this->hasMany(RemessaAnexo::class, 'remessa_id', 'id');
    }

    public function tipo()
    {
        return $this->belongsTo(RemessaTipo::class, 'remessa_tipo_id', 'id');
    }
}
