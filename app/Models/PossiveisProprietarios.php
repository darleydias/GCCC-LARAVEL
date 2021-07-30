<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PossiveisProprietarios extends Model
{
    public function permissoes(){
        return $this->hasMany(Permissoes::class);
    }
}
