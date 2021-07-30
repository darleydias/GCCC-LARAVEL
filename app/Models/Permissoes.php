<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permissoes extends Model
{
    public function tipoTarefa(){
        return belongsTo(TipoTarefa::class);
    }
    public function possiveisProprietarios(){
        return belongsTo(PossiveisProrietarios::class);
    }
}
