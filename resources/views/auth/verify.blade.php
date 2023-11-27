@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Подтвердите адрес электронной почты') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Ссыка на подтверждение почты отправлена на ваш email') }}
                        </div>
                    @endif

                    {{ __('Прежде чем продлжить, пожалуйста проверьте вашу почту') }}
                    {{ __('Если вы не получили сообщение') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Нажмите здесь чтобы запросить еще одно') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
