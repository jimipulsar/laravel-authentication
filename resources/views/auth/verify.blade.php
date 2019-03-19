@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifica il tuo indirizzo e-mail') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            Un link di conferma è stato inviato al tuo indirizzo e-mail.
                        </div>
                    @endif

                    {{ __('Prima di procedere, si prega di controllare l'email per confermare l'autenticazione.') }}
                    {{ __('Se non l'hai fatto non riceverai una e-mail) }}, <a href="{{ route('verification.resend') }}">{{ __('Clicca qui per richiedere un altro link di conferma.') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
