<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Estabelecimento extends Model {

    public $timesstamp = false;
    protected $fillable = ['nome'];

    public function clientes(){

        return $this->hasMany(related:Cliente::class);
    }

}