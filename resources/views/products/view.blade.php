@extends('layouts.index')

@section('content')

    <div class="page-header">
        <h1>
            <small>
                <a href="/products">voltar</a>
            </small>
        </h1>
    </div>

    @if ($product->name_br)
        <div class="page-header">
            <h1>{{ $product->name_br }}</h1>
        </div>

        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="{{ DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . $product->image_br . '.jpg' }}" alt="Tamanho padrão">
                    <div class="caption">
                        <h3>Imagem do produto</h3>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="form-group">
                    <label for="">Vantagens</label>
                    {{ $product->advantages_br }}
                </div>
                <div class="form-group">
                    <label for="">Características</label>
                    {{ $product->characteristics_br }}
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="{{ DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . $product->packing_br . '.jpg' }}" alt="Tamanho padrão">
                    <div class="caption">
                        <h3>Embalagem</h3>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if ($product->name_en)
        <div class="page-header">
            <h1>{{ $product->name_en }}</h1>
        </div>

        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="{{ DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . $product->image_en . '.jpg' }}" alt="Tamanho padrão">
                    <div class="caption">
                        <h3>Imagem do produto</h3>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="form-group">
                    <label for="">Vantagens</label>
                    {{ $product->advantages_en }}
                </div>
                <div class="form-group">
                    <label for="">Características</label>
                    {{ $product->characteristics_en }}
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="{{ DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . $product->packing_en . '.jpg' }}" alt="Tamanho padrão">
                    <div class="caption">
                        <h3>Embalagem</h3>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if ($product->name_es)
        <div class="page-header">
            <h1>{{ $product->name_es }}</h1>
        </div>

        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="{{ DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . $product->image_es . '.jpg' }}" alt="Tamanho padrão">
                    <div class="caption">
                        <h3>Imagem do produto</h3>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="form-group">
                    <label for="">Vantagens</label>
                    {{ $product->advantages_es }}
                </div>
                <div class="form-group">
                    <label for="">Características</label>
                    {{ $product->characteristics_es }}
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="{{ DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . $product->packing_es . '.jpg' }}" alt="Tamanho padrão">
                    <div class="caption">
                        <h3>Embalagem</h3>
                    </div>
                </div>
            </div>
        </div>
    @endif

@endsection