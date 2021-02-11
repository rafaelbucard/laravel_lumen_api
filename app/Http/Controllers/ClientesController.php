<?php

namespace App\Http\Controllers;
use App\Models\Cliente;


class ClientesController extends BaseController 
{
   
    public function __construct()
    {
        $this->classe = Cliente::class;
    }

    public function clientesBusca(int $estabelecimento_id) {
        $clientes = Cliente::query()
        ->where('estabelecimento_id',$estabelecimento_id)
        ->get();

        return $clientes;
    }

}
