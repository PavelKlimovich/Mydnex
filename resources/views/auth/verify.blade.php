@extends('layouts/conect')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Un mail de confirmation vous a été envoyé ! ') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un nouveau lien de confirmation vous a été envoyé !') }}
                        </div>
                    @endif

                    {{ __('Afin de valider votre inscription, vous devez cliquer sur le lien de confirmation qui vous a été envoyé par email lors de votre inscription.') }}
                    <br>
                    {{ __('Si vous ne retrouvez pas cet email et après avoir vérifié qu\'il ne se trouve pas dans votre dosser "Courrier indésirable" ou "spam" (ou équivalent) ') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
		                <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Clicker ici pour envoyer un nouveau mail de confirmation') }}</button>.
	                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
