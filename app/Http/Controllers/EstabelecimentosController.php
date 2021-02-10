<?php

namespace App\Http\Controllers;

use App\Models\Estabelecimento;


class EstabelecimentosController extends BaseController 
{
    public function __construct()
    {
        $this->classe = Estabelecimento::class;
    }
   
}
