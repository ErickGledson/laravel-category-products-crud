@extends('layouts.index')

@section('content')

    <div class="page-header">
        <h1>Editar Categoria</h1>
    </div>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form class="form-horizontal"  action="/categories/update" method="post" enctype="multipart/form-data">

        {{ csrf_field() }}

        <input type="hidden" name="id" id="id" value="{{ $categoria->id }}">

        <div class="form-group">
            <h3>Português</h3>
            <div class="col-lg-6">
                <label for="name_br">Nome</label>
                <input value="{{ $categoria->name_br }}" type="text" name="name_br" id="name_br" class="form-control">
            </div>
            <div class="col-lg-6">
                <label for="image_br">Imagem</label>
                <input type="file" name="image_br">
            </div>
        </div>

        <div class="form-group">
            <h3>Inglês</h3>
            <div class="col-lg-6">
                <label for="name_en">Nome</label>
                <input value="{{ $categoria->name_en }}" type="text" name="name_en" id="name_en" class="form-control">
            </div>
            <div class="col-lg-6">
                <label for="image_en">Imagem</label>
                <input type="file" name="image_en">
            </div>
        </div>

        <div class="form-group">
            <h3>Espanhol</h3>
            <div class="col-lg-6">
                <label for="name_es">Nome</label>
                <input value="{{ $categoria->name_es }}" type="text" name="name_es" id="name_es" class="form-control">
            </div>
            <div class="col-lg-6">
                <label for="image_es">Imagem</label>
                <input type="file" name="image_es">
            </div>
        </div>

        <input type="submit" class="btn btn-primary" value="Salvar">
        <a class="btn btn-danger" href="/categories">Voltar</a>

    </form>

@endsection