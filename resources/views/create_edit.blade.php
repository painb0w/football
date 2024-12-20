@extends('app')

@section('title', 'Добавление/изменение')

@section('content')

@if (request()->is('clubs/create'))
<form method="POST" action="/clubs" enctype="multipart/form-data" class="needs-validation" novalidate>
  @csrf

  <div class="form-group">
    <label for="name">Название</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Введите название клуба" value="{{ old('name') }}" required>
    <div class="invalid-feedback">Название обязательно для заполнения.</div>
  </div>

  <div class="form-group">
    <label for="president">Президент</label>
    <input type="text" class="form-control" id="president" name="president" placeholder="Введите ФИО президента" value="{{ old('president') }}" required>
    <div class="invalid-feedback">Укажите ФИО президента.</div>
  </div>

  <div class="form-group">
    <label for="description">Описание</label>
    <textarea class="form-control" id="description" name="description" rows="3" placeholder="Введите описание клуба" required>{{ old('description') }}</textarea>
    <div class="invalid-feedback">Описание обязательно для заполнения.</div>
  </div>

  <div class="form-group">
    <label for="date_found">Дата основания</label>
    <input type="date" class="form-control" id="date_found" name="date_found" value="{{ old('date_found') }}" required>
    <div class="invalid-feedback">Введите корректную дату основания.</div>
  </div>

  <div class="form-group">
    <label for="image">Логотип клуба</label>
    <input type="file" class="form-control" id="image" name="image" required>
    <div class="invalid-feedback">Выберите файл логотипа.</div>
  </div>
  
  <button type="submit" class="btn btn-primary">Добавить</button>
</form> 

@elseif (request()->is('clubs/*/edit'))
<form method="POST" action="/clubs/{{ $club->id }}" enctype="multipart/form-data" class="needs-validation" novalidate>

  @method('PATCH')

  @csrf

  <div class="form-group">
    <label for="name">Название</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Введите название клуба" value="{{ $club->name }}" required>
    <div class="invalid-feedback">Название обязательно для заполнения.</div>
  </div>

  <div class="form-group">
    <label for="president">Президент</label>
    <input type="text" class="form-control" id="president" name="president" placeholder="Введите ФИО президента" value="{{ $club->president }}" required>
    <div class="invalid-feedback">Укажите ФИО президента.</div>
  </div>

  <div class="form-group">
    <label for="description">Описание</label>
    <textarea class="form-control" id="description" name="description" rows="3" required>{{ $club->description }}</textarea>
    <div class="invalid-feedback">Описание обязательно для заполнения.</div>
  </div>

  <div class="form-group">
    <label for="date_found">Дата основания</label>
    <input type="date" class="form-control" id="date_found" name="date_found" value="{{ $club->date_found }}" required>
    <div class="invalid-feedback">Введите корректную дату основания.</div>
  </div>

  <div class="form-group">
    <label for="image">Логотип</label>
    <input type="file" class="form-control" id="image" name="image" required>
    <div class="invalid-feedback">Выберите файл логотипа.</div>
  </div>
  
  <button type="submit" class="btn btn-primary">Сохранить изменения</button>
</form> 
@endif 

@endsection
