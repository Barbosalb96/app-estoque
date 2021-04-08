@extends('layouts.app')

@section('title','Categorias')

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Categoria</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">Home</a>
                </li>

                <li class="breadcrumb-item active">
                    <strong>Categorias</strong>
                </li>
            </ol>
        </div>
    </div>


    <div class="wrapper wrapper-content animated fadeInRight">
        @if(session()->get('Sucess'))
            <div class="alert alert-success">
                Categoria cadastrada com sucesso
            </div>
        @endif

        @if(session()->get('sucesso'))
            <div class="alert alert-success">
                <p>Categoria deletada com <strong>Sucesso</strong></p>
            </div>

        @endif
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Categorias</h5>
                        <div class="ibox-tools">
                            <a href="{{route('categoria.create')}}" class="btn btn-primary btn-sm">Cadastrar
                                Categoria</a>
                            <a href="{{route('categoria.pdf')}}" class="btn btn-primary btn-sm"><i
                                    class="fa fa-file-pdf-o"></i></a>
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>


                    <div class="ibox-content">

                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>nome
                                <th>Descrição</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categorias as $categoria)
                                <tr>
                                    <td>{{$categoria->id}}</td>
                                    <td>{{$categoria->name}}</td>
                                    <td width="60%">{{$categoria->descricao}}</td>
                                    <td style="display: flex">

                                        <a href="{{route('categoria.edit',$categoria->id)}}"
                                           class="btn btn-warning">Editar</a>
                                        <form action="{{route('categoria.delete',$categoria->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" style="margin-left: 2px"
                                                    data-swal-toast-template="#my-template"
                                                    class="btn btn-danger confirm "

                                            >deletar
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
