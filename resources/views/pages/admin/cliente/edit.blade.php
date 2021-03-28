@extends('layouts.app')

@section('title','Editar categorias')


@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Categoria</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item active">
                    <a>Categorias</a>
                </li>
                <li class="breadcrumb-item active">
                    <strong>Editar Categorias</strong>
                </li>
            </ol>
        </div>
    </div>

    @if($errors->any())

        @foreach($errors->all() as $error)
            <div class="alert alert-danger">
                <p>{{$error}}</p>
            </div>
        @endforeach
    @endif


    <div class="col-lg-12">
        <div class="ibox ">
            <div class="ibox-title">
                <h5>Editar Categoria</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>


            <div class="ibox-content">

                {!! Form::model($categoria,['method'=>'put','route'=>['categoria.update',$categoria->id]]) !!}
                {!! Form::token() !!}
                <div class="form-group row">
                    <label class="col-lg-2 col-form-label">Nome</label>
                    <div class="col-lg-10">
                        <input type="text" placeholder="" value="{{$categoria->name}}" name="name"
                               class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-2 col-form-label">Descrição</label>
                    <div class="col-lg-10">
                        <input type="text" placeholder="" name="descricao" value="{{$categoria->descricao}}"
                               class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-sm btn-primary" type="submit">Atualizar</button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection
