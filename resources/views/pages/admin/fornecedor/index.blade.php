@extends('layouts.app')

@section('title','Clientes')

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Clientes</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">Home</a>
                </li>

                <li class="breadcrumb-item active">
                    <strong>Clientes</strong>
                </li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="wrapper wrapper-content animated fadeInRight">


            @if(session()->get('sucesso'))

                <div class="alert alert-success">
                    <p>Cadastro com feito sucesso</p>
                </div>

            @endif


            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Clientes</h5>
                            <div class="ibox-tools">
                                <a href="{{route('cliente.create')}}" class="btn btn-primary btn-sm">Cadastrar
                                    Clientes</a>
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
                                    <th>Logradouro</th>
                                    <th>Numero</th>
                                    <th>Bairro</th>
                                    <th>Estado</th>
                                    <th>Telefone</th>
                                    <th>CPF</th>
                                    <th>RG</th>
                                    <th>Acton</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($clientes as $cliente)
                                    <tr>
                                        <td>{{$cliente->id}}</td>
                                        <td>{{$cliente->name}}</td>
                                        <td>{{$cliente->logradouro}}</td>
                                        <td>{{$cliente->number}}</td>
                                        <td>{{$cliente->bairro}}</td>
                                        <td>{{$cliente->estado}}</td>
                                        <td>{{$cliente->telefone}}</td>
                                        <td>{{$cliente->cpf}}</td>
                                        <td>{{$cliente->rg}}</td>

                                        <td style="display:flex">
                                            <a href="" class="btn btn-warning" style="    margin-right: 2px;"><i
                                                    class="fa fa-edit"></i></a>

                                            <form action="" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"><i
                                                        class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="btn-group ">
                                {{$clientes->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
