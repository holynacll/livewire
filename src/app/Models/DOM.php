<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DOM extends Model
{
    use HasFactory;

    public $table = 'dom';

    protected $fillable = [
        'path',
        'instituicao_id',
    ];
}
