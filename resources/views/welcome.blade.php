@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-success">
            
                    @if(Auth::check())
                    <h3 style="text-align:center;">Lista dei personaggi di "Game of Thrones"</h3>
                    <hr>
                      <table class="table table-striped table-light">
                          <tr>
                              <th>Personaggi</th>
                              <th>Nome Reale</th>
                          </tr>
                          @foreach($characters as $key => $value)
                            <tr>
                              <td>{{ $key }}</td><td>{{ $value }}</td>
                            </tr>
                          @endforeach
                      </table>
                    @endif


            </div>
            @if(Auth::guest())
            <h3>Per visualizzare la lista devi effettuare l'accesso</h3>
              <a href="/login" class="btn btn-info"> Effettua l'accesso >></a>
            @endif
        </div>
    </div>
</div>
@endsection