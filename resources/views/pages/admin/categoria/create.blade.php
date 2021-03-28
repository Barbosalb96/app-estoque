@extends('layouts.app')

@section('title','Cadastra categorias')


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
                    <strong>Cadastrar Categorias</strong>
                </li>
            </ol>
        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">
        @if($errors->any())

            <div class="alert alert-danger">
                @foreach($errors->all() as $erro)
                    <p>{{$erro}}</p>
                @endforeach
            </div>

        @endif

        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Cadastrar Categoria</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>

                <div class="ibox-content">
                    <form action="{{route('categoria.store')}}" method="post">
                        {{csrf_field()}}

                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label">Nome</label>
                            <div class="col-lg-10 @error('name') has-error @enderror">
                                <input type="text" value="{{old('name')}}" name="name"
                                       class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label">Descrição</label>
                            <div class="col-lg-10">
                                <input type="text" value="{{old('descricao')}}" name="descricao"
                                       class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-sm btn-primary" type="submit">Cadastrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection
