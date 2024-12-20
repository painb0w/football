@extends('app')

@section('title', 'Футбольный клуб')

@section('content')
<div class="container mt-4">
    <h4 class="mb-4">Подробная информация о клубе</h4>
    
    <div class="card">
        <div class="card-body">
            <div class="mb-3">
                <strong>Название:</strong>
                <p>{{ $club->name }}</p>
            </div>
            
            <div class="mb-3">
                <strong>Дата основания:</strong>
                <p>{{ $club->date_found }}</p>
            </div>
            
            <div class="mb-3">
                <strong>Описание клуба:</strong>
                <p>{{ $club->description }}</p>
            </div>
            
            <div class="mb-3">
                <strong>Логотип:</strong>
                <p><img src="{{ asset($club->image) }}" class="img-fluid" alt="Логотип клуба"></p>
            </div>
        </div>
    </div>

    <div class="mt-4 d-flex justify-content-between">

        <form action="/clubs/{{ $club->id }}/edit" method="GET" class="d-inline">
            <button type="submit" class="btn btn-primary btn-lg">Редактировать</button>
        </form>

        <form action="/clubs/{{ $club->id }}" method="POST" class="ml-2">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger btn-lg">Удалить</button>
        </form>
    </div>
</div>
@endsection

<!-- @extends('app')

@section('title', 'Футбольный клуб')

@section('content')
<form>
<h4>Подробная информация</h4>
<strong>Название</strong>
<p>{{ $club->name }}</p>
<strong>Дата основания</strong>
<p>{{ $club->date_found }}</p>
<strong>Описание клуба</strong>
<p>{{ $club->description }}</p>
<strong>Логотип</strong>
<p><img src="{{ asset($club->image) }}" width="10%" alt="Logo"></p>

<a href="/clubs/{{ $club->id }}/edit" class="btn btn-secondary btn-lg btn-block">Редактировать</a>
</form>

<form action="/clubs/{{ $club->id }}" method="POST">
    @method('DELETE')
    @csrf
    <button>Удалить</button>
</form>

@endsection -->
