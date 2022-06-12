{{-- Pagina que recibe la variable locations desde el controlador
     realiza un foreach y muestra la informacion en un objeto card de bootstrap
--}}

@extends('layout')

@section('content')
<div class="container">
    <div style="padding-top: 1.5rem;" class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h3 class="card-header text-center">Locaciones</h3>
                <div class="card-body">
                    @if(!empty($locations))     {{-- valida que la variable no este vacia --}}
                        <div class="row">
                            <div class="card-deck">
                                @foreach($locations as $location)     {{-- recorre la variable --}}
                                <div class="col-md-4">
                                    <div class="card border-primary mb-3" style="max-width: 18rem;">
                                        <div style="font-size: medium;" class="card-header bg-transparent border-primary"><h4>{{ $location->name }}</h4></div>
                                        <div class="card-body text-primary">
                                          <h5 class="card-title">Type: {{ $location->type }}</h5>
                                          <span class="card-text">Dimension: {{ $location->dimension }}</span><br/>
                                          <span class="card-text">URL: {{ $location->url }}</span><br/>
                                        </div>
                                        <div class="card-footer bg-transparent border-primary">Created <small class="text-muted">{{ $location->created }}</small></div>
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