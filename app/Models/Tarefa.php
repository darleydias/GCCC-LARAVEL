<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    protected $fillable = ['solicitacao','TipoTarefa_id','ativo'];
    public function TipoTarefa(){
        return belongsTo(TipoTarefa::class);
    }
    public function processo(){
        return belongsTo(Processo::class);
    }
}
