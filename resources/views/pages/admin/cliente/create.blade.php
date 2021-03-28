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
                        <form action="{{route('cliente.store')}}" method="post">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="form-group  col-md-5">
                                    <div class="form-group">
                                        <label>Nome</label>
                                        <input type="text" name="name" placeholder="nome do cliente"
                                               value="{{old('name')}}"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <div class="form-group">
                                        <label>CPF</label>
                                        <input type="text" name="cpf" placeholder="123.456.789-41"
                                               value="{{old('cpf')}}"
                                               class="form-control" id="cpf">
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <div class="form-group">
                                        <label>Rg</label>
                                        <input type="text" name="rg" placeholder="184118116" value="{{old('rg')}}"
                                               class="form-control rg">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group  col-md-2">
                                    <div class="form-group">
                                        <label>Cep
                                            <div style="display: flex">
                                                <input type="text" placeholder="65066.260" value="{{old('cep')}}"
                                                       id="cep"
                                                       class="form-control">
                                                <buttom onclick="('buscar()')" class="btn btn-default "
                                                        style="margin: 0px 2px;"><i class="fa fa-search"
                                                                                    aria-hidden="true"></i></buttom>
                                            </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="form-group">
                                        <label>Logradouro</label>
                                        <input type="text" name="logradouro" value="{{old('logradouro')}}"
                                               id="logradouro"
                                               placeholder="Digite seu endereço"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <div class="form-group">
                                        <label>Bairro</label>
                                        <input type="text" id="bairro" name=" bairro" value="{{old('bairro')}}"
                                               placeholder="Digite seu bairro"
                                               class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group  col-md-2">
                                    <div class="form-group">
                                        <label>Estado</label>
                                        <input type="text" name="estado" id="estado" value="{{old('estado')}}"
                                               placeholder="Maranhão"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="form-group  col-md-3">
                                    <div class="form-group">
                                        <label>Cidade</label>
                                        <input type="text" name="cidade" id="cidade" value="{{old('cidade')}}"
                                               placeholder="São Luis"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="form-group  col-md-1">
                                    <div class="form-group @error('number') has-error @enderror ">
                                        <label>Numero</label>
                                        <input type="text" name="number" value="{{old('number')}}"
                                               placeholder=""
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <div class="form-group">
                                        <label>Telefone</label>
                                        <input type="tel" name="telefone" value="{{old('telefone')}}"
                                               placeholder="4002-8922" class="form-control">
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
