{{-- Pagina que recibe la variable episodes desde el controlador
     realiza un foreach y muestra la informacion en un objeto card de bootstrap
--}}
@extends('layout')

@section('content')
<div class="container">
    <div style="padding-top: 1.5rem;" class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h3 class="card-header text-center">Episodios</h3>
                <div class="card-body">
                    @if(!empty($episodes))     {{-- valida que la variable no este vacia --}}
                        <div class="row">
                            <div class="card-deck">
                                @foreach($episodes as $episode)     {{-- recorre la variable --}}
                                <div class="col-md-4">
                                    <div class="card border-dark mb-3" style="max-width: 18rem;">
                                        <div class="card-header">Episodio # {{ $episode->id }}</div>
                                        <div class="card-body text-dark">
                                            <h5 class="card-title">{{ $episode->name }}</h5>
                                            <span class="card-text">Air_date: {{ $episode->air_date }}</span><br/>
                                            <span class="card-text">URL: {{ $episode->url }}</span><br/>
                                            <p class="card-text">Created <small class="text-muted">{{ $episode->created }}</small></p>
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