@extends('layouts.admin') @section('content')
<div class="container">
    <figure class="auth-form__logo">
        <img src="{{ asset('images/logo_site.webp') }}" alt="検定システム" srcset="">
    </figure>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="auth-form__wrap">
                    <form method="POST" action="{{ route('admin.login') }}" class="auth-form" novalidate>
                        @csrf

                        <div class="auth-form__item">
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control auth-form__input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="ログインID" />

                                @error('email')
                                <span class="invalid-feedback err-msg" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="auth-form__item">
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control auth-form__input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="パスワード" />

                                @error('password')
                                <span class="invalid-feedback err-msg" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div class="auth-form__item">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="auth-form__btn">
                                    {{ __("ログインする") }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
