@extends('layouts.app')

@section('title','Cadastra Cliente')


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
                        <form action="{{route('cliente.store')}}" method="post">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="form-group  col-md-5">
                                    <div class="form-group">
                                        <label>Nome Fantasia</label>
                                        <input type="text" name="name"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <div class="form-group">
                                        <label>Cnpj</label>
                                        <input type="text" name="cnpj" class="form-control" id="cpf">
                                    </div>
                                </div>
                            </div>
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
