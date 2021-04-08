@extends('layouts.app')

@section('title','Fornecedores')

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Fornecedores</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">Home</a>
                </li>

                <li class="breadcrumb-item active">
                    <strong>Fornecedores</strong>
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
                            <h5>Forncedores</h5>
                            <div class="ibox-tools">
                                <a href="{{route('fornecedor.create')}}" class="btn btn-primary btn-sm">Cadastrar
                                    Forncedores</a>
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
                                    <th>Bairro</th>
                                    <th>Estado</th>
                                    <th>Telefone</th>
                                    <th>Cnpj</th>
                                    <th>RG</th>
                                    <th>Acton</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($forncedores as $fornecedor)
                                    <tr>
                                        <td>{{$forncedor->id}}</td>
                                        <td>{{$forncedor->Logradouro}}</td>
                                        <td>{{$forncedor->Bairro}}</td>
                                        <td>{{$forncedor->Estado}}</td>
                                        <td>{{$forncedor->Telefone}}</td>
                                        <td>{{$forncedor->cnpj}}</td>
                                        <td>
                                            <a href="" class="btn btn-warning"><i class='fa fa-edit'></i></a>
                                            <form action="{{route('forncedor.delete',$fornecedor->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>

                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination">
                                {{ $forncedores->render()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
