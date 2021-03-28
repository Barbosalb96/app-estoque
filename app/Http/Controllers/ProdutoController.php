<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {

        $produtos = Produto::all();
        return view('pages.admin.produto.index',compact('produtos'));
    }


    public function create()
    {
        $categorias = Categoria::all();
        return view('pages.admin.produto.create', compact('categorias'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nome' => 'required|max:150|min:4',
            'categoria' => 'required|max:50|min:5',
            'descricao' => 'required|max:200|min:5',
            'custoMedio' => 'required|min:5|integer'
        ]);


        $quantidade = $request->input('quantidade');
        $custoMedio = $request->input('custoMedio');

        $valortotal = $quantidade * $custoMedio;

        $produto = new Produto();
        $produto->nome = $request->input('nome');
        $produto->marca = $request->input('marca');
        $produto->categoria = $request->input('categoria');
        $produto->descricao = $request->input('descricao');
        $produto->quantidade = $request->input('quantidade');
        $produto->custoMedio = $request->input('custoMedio');
        $produto->valorTotal = $valortotal;
        $produto->save();

    }
}
