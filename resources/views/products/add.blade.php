@extends('layouts.index')

@section('content')

    <div class="page-header">
        <h1>Adicionar Produto</h1>
    </div>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif

    <form class="form-horizontal"  action="/products/save" method="post" enctype="multipart/form-data">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="marketed">Categoria</label>
            <select name="category_id" id="category_id" class="form-control">
                @foreach($categories as $key => $value)
                    <option value="{{ $value->id }}">{{ $value->name_br }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="marketed">Vendido em</label>
            <select name="marketed" id="marketed" class="form-control">
                <option value="3">Todos</option>
                <option value="1">Brasil</option>
                <option value="2">Estados Unidos</option>
            </select>
        </div>

        <ul class="nav nav-tabs">
            <li class="active">
                <a data-toggle="tab" href="#br">Português</a>
            </li>
            <li>
                <a data-toggle="tab" href="#en">Inglês</a>
            </li>
            <li>
                <a data-toggle="tab" href="#es">Espanhol</a>
            </li>
        </ul>

        <div class="tab-content">
            <div id="br" class="tab-pane fade in active">
                <div class="form-group">
                    <div class="col-lg-6">
                        <label for="name_br">Nome</label>
                        <input type="text" name="name_br" id="name_br" value="{{ old('name_br') }}" class="form-control">
                    </div>
                    <div class="col-lg-6">
                        <label for="image_br">Imagem</label>
                        <input type="file" name="image_br" id="image_br" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-lg-6">
                        <label for="advantages_br">Vantagens</label>
                        <input type="text" name="advantages_br" id="advantages_br" value="{{ old('advantages_br') }}" class="form-control">
                    </div>
                    <div class="col-lg-6">
                        <label for="characteristics_br">Características</label>
                        <input type="text" name="characteristics_br" id="characteristics_br" value="{{ old('characteristics_br') }}" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-lg-6">
                        <label for="packing_br">Embalagem</label>
                        <input type="file" name="packing_br" id="packing_br" class="form-control">
                    </div>
                </div>
            </div>
            
            <div id="en" class="tab-pane fade">
                <div class="form-group">
                    <div class="col-lg-6">
                        <label for="name_en">Nome</label>
                        <input type="text" name="name_en" id="name_en" value="{{ old('name_en') }}" class="form-control">
                    </div>
                    <div class="col-lg-6">
                        <label for="image_en">Imagem</label>
                        <input type="file" name="image_en" id="image_en" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-lg-6">
                        <label for="advantages_en">Vantagens</label>
                        <input type="text" name="advantages_en" id="advantages_en" value="{{ old('advantages_en') }}" class="form-control">
                    </div>
                    <div class="col-lg-6">
                        <label for="characteristics_en">Características</label>
                        <input type="text" name="characteristics_en" id="characteristics_en" value="{{ old('characteristics_en') }}" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-lg-6">
                        <label for="packing_en">Embalagem</label>
                        <input type="file" name="packing_en" id="packing_en" class="form-control">
                    </div>
                </div>
            </div>
            
            <div id="es" class="tab-pane fade">
                <div class="form-group">
                    <div class="col-lg-6">
                        <label for="name_es">Nome</label>
                        <input type="text" name="name_es" id="name_es" value="{{ old('name_es') }}" class="form-control">
                    </div>
                    <div class="col-lg-6">
                        <label for="image_es">Imagem</label>
                        <input type="file" name="image_es" id="image_es" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-lg-6">
                        <label for="advantages_es">Vantagens</label>
                        <input type="text" name="advantages_es" id="advantages_es" value="{{ old('advantages_es') }}" class="form-control">
                    </div>
                    <div class="col-lg-6">
                        <label for="characteristics_es">Características</label>
                        <input type="text" name="characteristics_es" id="characteristics_es" value="{{ old('characteristics_es') }}" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-lg-6">
                        <label for="packing_es">Embalagem</label>
                        <input type="file" name="packing_es" id="packing_es" class="form-control">
                    </div>
                </div>
            </div>
        </div>


        <input type="submit" class="btn btn-primary" value="Cadastrar">
        <a class="btn btn-danger" href="/products">Voltar</a>

    </form>

@endsection