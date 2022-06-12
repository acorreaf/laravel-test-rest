{{-- Pagina que recibe al usuario luego de loguearse de manera exitosa --}}

@extends('layout')

@section('content')
<div class="container">
    <div style="padding-top: 1.5rem;" class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h3 class="card-header text-center">Informaci&oacute;n General</h3>
                <div class="card-body">
                    @if(!empty($options))
                        <ul class="list-group list-group-flush">
                            @foreach($options as $option)
                                <li class="list-group-item">{{ $option }}</li>
                            @endforeach
                        </ul>
                    @endif                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection