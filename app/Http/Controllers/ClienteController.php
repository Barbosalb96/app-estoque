<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::paginate(5);

        return view('pages.admin.cliente.index', compact('clientes'));
    }

    public function create()
    {
        return view('pages.admin.cliente.create');
    }

    public function store(Request $request)
    {
        $cliente = $request->all();

        $this->validate($request, [
            'name' => 'required|max:30|min:3',
            'cpf' => 'required|max:15|min:11|unique:clientes',
            'rg' => 'required|max:10|min:9|unique:clientes',
            'logradouro' => 'required|max:40|min:5',
            'bairro' => 'required|min:4|max:10',
            'estado' => 'required|min:2|max:2',
            'cidade' => 'required:|min:5|max:15',
            'number' => 'required:|min:1|max:6',
            'telefone' => 'required',

        ]);


        Cliente::create($cliente);

        return redirect()->route('cliente.index')->with('sucesso', 'Sucesso ao cadastrar');

    }
}
