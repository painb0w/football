@extends('app')

@section('title', 'Футбол')

@section('content')
<div>
    <h1>Футбольные клубы</h1>
</div>
<div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-3 row-cols-xxl-4 row-cols-xxxl-5 g-4 py-5">
    @forelse($clubs as $club)
        <div class="col">
            <div class="card h-100 d-flex flex-column" style="width: 18rem;">
                <a class="d-inline-flex link-body-emphasis text-decoration-none">
                    <div class="img-responsive">                            
                        <div class="card-overlay">Футбольный клуб</div>
                        <img src="{{ asset($club->image) }}" width="100%" alt="Logo">
                    </div>
                </a>
                <div class="card-body">
                    <h5 class="card-title">{{ $club->name }}</h5>
                    <p class="card-text">{{ $club->name }}. Дата основания: {{ $club->date_found }}. Генеральный директор {{ $club->president }}.</p>
                    <a href="/clubs/{{ $club->id }}" class="btn btn-primary">Подробнее</a>
                </div>
            </div>                
        </div>
    @empty
        <h3>Нет доступных футбольных клубов</h3>
    @endforelse
@endsection

