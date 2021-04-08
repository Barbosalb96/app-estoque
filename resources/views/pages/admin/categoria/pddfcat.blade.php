<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <td>Nome Catgorias</td>
    <td>descrição Catgorias</td>

    <title>Document</title>

    <style>
        th {
            padding: 4px;
            font-family: "Open Sans";
        }

        td {
            padding: 4px;
        }
    </style>
</head>
<body>

<h2>Lista de Categorias</h2>
<hr>

<table bclass="table table-bordered">
    <thead>
    <tr>
        <th scope="col">Nome Catgorias</th>

        <th scope="col">descrição Catgorias</th>
        |
        <th scope="col">quantidade</th>
    </tr>
    </thead>
    <tbody>
    @foreach($categorias as $cat)
        <tr>
            <td>{{$cat->name}}</td>
            <td>{{$cat->descricao}}</td>
        </tr>

    @endforeach

    </tbody>
</table>
</body>
</html>
