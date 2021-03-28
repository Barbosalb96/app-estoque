<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Http\Requests\CategoriaRequest;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();


        return view('pages.admin.categoria.index', compact('categorias'));
    }

    public function create()
    {
        return view('pages.admin.categoria.create');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|max:20|min:3|unique:categorias',
            'descricao' => 'required|max:200|min:5',
        ]);

        $categoria = $request->all();
        Categoria::create($categoria);
        return redirect()->route('categoria.index')->with('Sucess', 'Cadastrado com Sucesso');
    }


    public function edit($id)
    {
        $categoria = Categoria::find($id);
        return view('pages.admin.categoria.edit', compact('categoria'));
    }

    public function update(Request $resquest, $id)
    {
        $this->validate($resquest, [
            'name' => 'required|max:50',
        ]);

        $categoria = $resquest->all();
        Categoria::find($id)->update($categoria);
        return redirect()->route('categoria.index')->with('sucess');
    }

    public function delete($id)
    {
        Categoria::find($id)->delete();

        return redirect()->route('categoria.index');
    }
}
