{{-- Pagina que recibe la variable characters desde el controlador
     realiza un foreach y muestra la informacion en un objeto card de bootstrap
--}}
@extends('layout')

@section('content')
<div class="container">
    <div style="padding-top: 1.5rem;" class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h3 class="card-header text-center">Caracteres</h3>
                <div class="card-body">
                    @if(!empty($characters))     {{-- valida que la variable no este vacia --}}
                        <div class="row">
                            <div class="card-deck">
                                @foreach($characters as $character)     {{-- recorre la variable --}}
                                <div class="col-md-4">
                                    <div class="card">
                                        <img class="card-img-top" src="{{ $character->image }}" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Name: {{ $character->name }}</h5>
                                            <p class="card-text">Species: {{ $character->species }}</p>
                                            <p class="card-text">Gender: {{ $character->gender }}</p>
                                            <p class="card-text">Status: {{ $character->status }}</p>
                                            <p class="card-text">Created <small class="text-muted">{{ $character->created }}</small></p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection