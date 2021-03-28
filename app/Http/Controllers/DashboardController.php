<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Fornecedor;
use App\Funcionario;
use App\Produto;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $produtos = Produto::paginate(5);
        $produtoCount = Produto::all();
        $funcionario = Funcionario::all();
        $fornecedor = Fornecedor::all();
        $clientes = Cliente::all();


        return view('pages.admin.home.index', compact('produtos','produtoCount', 'clientes','fornecedor', 'funcionario'));

    }

}
