@extends('layouts.index')

@section('content')

    <div class="page-header">
        <h1>Categorias</h1>
    </div>

    <nav class="navbar navbar-default">
        <div class="container">
            <ul class="nav navbar-nav">
                <li>
                    <a href="/categories/add">adicionar</a>
                </li>
                <li>
                    <a href="/products">produtos</a>
                </li>
            </ul>
        </div>
    </nav>

    @if (count($categorias) > 0)
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
                @foreach($categorias as $key => $value)
                <tr>
                    <td>{{ $value->name_br  }}</td>
                    <td>{{ $value->name_en  }}</td>
                    <td>{{ $value->name_es  }}</td>
                    <td>
                        <a href="/categories/view/{{ $value->id }}" class="btn btn-primary">
                            <i class="glyphicon glyphicon-eye-open"></i>
                        </a>
                        <a href="/categories/edit/{{ $value->id }}" class="btn btn-warning">
                            <i class="glyphicon glyphicon-pencil"></i>
                        </a>
                        <a href="/categories/remove/{{ $value->id }}" class="btn btn-danger">
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
                Não há categorias. <a href="/categories/add">Cadastre</a>.
            </p>
        </div>
    @endif


@endsection