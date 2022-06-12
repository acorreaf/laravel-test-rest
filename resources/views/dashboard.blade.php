{{-- Pagina que recibe al usuario luego de loguearse de manera exitosa --}}

@extends('layout')      {{-- Hereda de la plantilla los estilos y apariencia comun en todas las paginas --}}
  
@section('content')
<div class="container">
    <div style="padding-top: 1.5rem;" class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
  
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection