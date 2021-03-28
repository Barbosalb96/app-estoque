@extends('layouts.app')

@section('title','dashboard')
@section('style')
    .input-group{
    display:flex;
    }
@endsection

@section('content')
    <div class="wrapper wrapper-content">
        <div class="row">

            <div class="col-lg-3">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Produtos</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">{{$produtoCount->count()}}</h1>
                        <small>Total</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Fornecedores</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">{{$fornecedor->count()}}</h1>
                        <small>Total</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Funcionarios </h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">{{$funcionario->count()}}</h1>
                        <small>Total</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Clientes</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">{{$clientes->count()}}</h1>
                        <small>Total</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Produtos</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nome</th>
                                    <th>Marca</th>
                                    <th>Categoria</th>
                                    <th>Descrição</th>
                                    <th>Quantidade</th>
                                    <th>Custo Media</th>
                                    <th>Valor Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($produtos as $produto)

                                    <tr>
                                        <td>{{$produto->id}}</td>
                                        <td>{{$produto->nome}}</td>
                                        <td>{{$produto->marca}}</td>
                                        <td>{{$produto->categoria}}</td>
                                        <td>{{$produto->descricao}}</td>
                                        <td>{{$produto->quantidade}}</td>
                                        <td width="120px">R$ {{number_format( $produto->custoMedio , 2)}}</td>
                                        <td width="120px">R$ {{number_format( $produto->valorTotal,2)}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="btn-group pull-right">
                                {{$produtos->render()}}
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection
