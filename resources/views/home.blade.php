@extends('layouts.app')

@section('content')
<div class="contenitore">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        Benvenuto,
                        Ti sei autenticato correttamente!
                        <hr>
                        <img src="http://localhost:8000/images/cast.jpg" width="70%">
                        <hr>
                        <h6>Per visualizzare la lista del cast di Game of Thrones clicca qui ->
                        <a class="btn btn-outline-primary " href="{{ route('welcome') }}">  {{ __('Visita il cast ufficiale') }}</a></h6>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
