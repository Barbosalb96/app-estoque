@extends('layouts.app')

@section('title','Cadastra Produtos')


@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Cliente</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item active">
                    <a>Cliente</a>
                </li>
                <li class="breadcrumb-item active">
                    <strong>Cadastrar Cliente</strong>
                </li>
            </ol>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $erro)
                        <p>Erro : {{$erro}}</p>
                    @endforeach
                </div>
            @endif

            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Cadastrar Cliente</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>

                    <div class="ibox-content">
                        <form action="{{route('produto.store')}}" method="post">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="form-group  col-md-5">
                                    <div class="form-group">
                                        <label>Nome do Produto</label>
                                        <input type="text" name="nome" placeholder="Nome do Produto"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <div class="form-group">
                                        <label>Marca</label>
                                        <input type="text" name="marca" placeholder="Modelo"
                                               class="form-control" id="cpf">
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <div class="form-group">
                                        <label>Categoria</label>
                                        <select name="categoria" class="form-control" id="">
                                            @foreach($categorias as $categoria)
                                                <option value="{{$categoria->name}}">{{$categoria->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group  col-md-7">
                                    <div class="form-group">
                                        <label>Descrição</label>
                                        <input type="text" name="descricao"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="form-group  col-md-2">
                                    <div class="form-group">
                                        <label>Quantidade de Items</label>
                                        <input type="text" name="quantidade"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="form-group col-md-2">
                                    <div class="form-group">
                                        <label>Valor</label>
                                        <input type="text" name="custoMedio"
                                               class="form-control">
                                    </div>
                                </div>

                            </div>
                            <button class="btn btn-primary">Cadastrar</button>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        buscar = addEventListener('click', function (event) {
            event.defaultPrevented

            let cep = document.getElementById('cep').value;
            fetch(`https://viacep.com.br/ws/${cep}/json/`).then(
                function (response) {
                    return response.json();
                }
            ).then(function (data) {
                document.getElementById('estado').value = data.uf;
                document.getElementById('cidade').value = data.localidade;
                document.getElementById('logradouro').value = data.logradouro;
                document.getElementById('bairro').value = data.bairro;
            });
        })


        $(document).ready(function () {
            $('.rg').mask('9999999-8');
            $('.cep').mask('99999-999');
            $('#cpf').mask('999.999.999-99');
            $('.telegone').mask('(999) 999-9999');
        });

    </script>


@endsection
