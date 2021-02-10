<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Estabelecimento extends Model
{
    public $timestamps = false;
    protected $fillable = ['nome'];

    public function cliente()
    {
        return $this->hasMany(Cliente::class);
    }
}
