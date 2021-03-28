@extends('layouts.app')

@section('title','Produtos')

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Produto</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">Home</a>
                </li>

                <li class="breadcrumb-item active">
                    <strong>Produto</strong>
                </li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="wrapper wrapper-content animated fadeInRight">


            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Produtos</h5>
                            <div class="ibox-tools">
                                <a href="{{route('produto.create')}}" class="btn btn-primary btn-sm">Cadastrar
                                    Produto</a>
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
                                    <th>Nome
                                    <th>descrição</th>
                                    <th>Marca</th>
                                    <th>Categoria</th>
                                    <th>Quantidade</th>
                                    <th>Custo Medio</th>
                                    <th>Valor Total</th>
                                    <th>Acton</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($produtos as $produto)
                                    <tr>
                                        <td>{{$produto->id}}</td>
                                        <td>{{$produto->nome}}</td>
                                        <td>{{$produto->descricao}}</td>
                                        <td>{{$produto->marca}}</td>
                                        <td>{{$produto->categoria}}</td>
                                        <td>{{$produto->quantidade}}</td>
                                        <td>{{ number_format($produto->custoMedio,2)}}</td>
                                        <td>{{ number_format($produto->valorTotal,2)}}</td>
                                        <td style="display: flex">
                                            <a href="" class="btn btn-warning" style="margin-right: 2px"><i
                                                    class="fa fa-edit"></i></a>
                                            <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
