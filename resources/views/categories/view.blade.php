@extends('layouts.index')

@section('content')

    <div class="page-header">
        <h1>
            {{ $category->name_br }} | {{ $category->name_en }} | {{ $category->name_es }}
            <small>
                <a href="/categories">voltar</a>
            </small>
        </h1>
    </div>

    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{ DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . $category->image_br . '.jpg' }}" alt="Tamanho padrão">
                <div class="caption">
                    <h3>Tamanho padrão - Português</h3>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{ DIRECTORY_SEPARATOR . 'thumbs' . DIRECTORY_SEPARATOR . $category->image_br . '_50.jpg' }}" alt="Tamanho 50%">
                <div class="caption">
                    <h3>Tamanho 50% - Português</h3>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{ DIRECTORY_SEPARATOR . 'thumbs' . DIRECTORY_SEPARATOR . $category->image_br . '_30.jpg' }}" alt="Tamanho 30%">
                <div class="caption">
                    <h3>Tamanho 30% - Português</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{ DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . $category->image_en . '.jpg' }}" alt="Tamanho padrão">
                <div class="caption">
                    <h3>Tamanho padrão - Inglês</h3>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{ DIRECTORY_SEPARATOR . 'thumbs' . DIRECTORY_SEPARATOR . $category->image_en . '_50.jpg' }}" alt="Tamanho 50%">
                <div class="caption">
                    <h3>Tamanho 50% - Inglês</h3>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{ DIRECTORY_SEPARATOR . 'thumbs' . DIRECTORY_SEPARATOR . $category->image_en . '_30.jpg' }}" alt="Tamanho 30%">
                <div class="caption">
                    <h3>Tamanho 30% - Inglês</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{ DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . $category->image_es . '.jpg' }}" alt="Tamanho padrão">
                <div class="caption">
                    <h3>Tamanho padrão - Espanhol</h3>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{ DIRECTORY_SEPARATOR . 'thumbs' . DIRECTORY_SEPARATOR . $category->image_es . '_50.jpg' }}" alt="Tamanho 50%">
                <div class="caption">
                    <h3>Tamanho 50% - Espanhol</h3>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{ DIRECTORY_SEPARATOR . 'thumbs' . DIRECTORY_SEPARATOR . $category->image_es . '_30.jpg' }}" alt="Tamanho 30%">
                <div class="caption">
                    <h3>Tamanho 30% - Espanhol</h3>
                </div>
            </div>
        </div>
    </div>



@endsection