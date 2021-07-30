<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\Tarefa;
//o Processo aqui é uma instancia
class Processo extends Model{
    protected $fillable = ['nome','operacao_atual','finalizado','ativo'];
    public function tarefa(){
        return $this->hasMany(Tarefa::class);
    }
}
?>