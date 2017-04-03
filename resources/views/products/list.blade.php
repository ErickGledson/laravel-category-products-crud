@extends('layouts.index')

@section('content')

    <div class="page-header">
        <h1>Produtos</h1>
    </div>

    <nav class="navbar navbar-default">
        <div class="container">
            <ul class="nav navbar-nav">
                <li>
                    <a href="/products/add">adicionar</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mercado <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/products/br">Brasil</a></li>
                        <li><a href="/products/us">Estados Unidos</a></li>
                        <li><a href="/products">Todos</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/">categorias</a>
                </li>
            </ul>
        </div>
    </nav>

    @if (count($products) > 0)
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>descrição - português</th>
                    <th>descrição - inglês</th>
                    <th>descrição - espanhol</th>
                    <th>opções</th>
                </tr>
            </thead>

            <tbody>
                @foreach($products as $key => $value)
                <tr>
                    <td>{{ $value->name_br  }}</td>
                    <td>{{ $value->name_en  }}</td>
                    <td>{{ $value->name_es  }}</td>
                    <td>
                        <a href="/products/view/{{ $value->id }}" class="btn btn-primary">
                            <i class="glyphicon glyphicon-eye-open"></i>
                        </a>
                        <a href="/products/edit/{{ $value->id }}" class="btn btn-warning">
                            <i class="glyphicon glyphicon-pencil"></i>
                        </a>
                        <a href="/products/remove/{{ $value->id }}" class="btn btn-danger">
                            <i class="glyphicon glyphicon-trash"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="alert alert-warning">
            <b>Atenção</b>
            <p>
                Não há produtos. <a href="/products/add">Cadastre</a>.
            </p>
        </div>
    @endif


@endsection