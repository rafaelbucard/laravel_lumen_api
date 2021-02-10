<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Cliente  extends Model{

    public $timesstamp = false;
    protected $fillable = ['nome','email','estabelecimento_id'];
    public function estabelecimento(){

        return $this->belongsTo(Estabelecimento::class);

    }

}