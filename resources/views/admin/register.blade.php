@extends('layouts.admin') @section('content')
<div class="container">
    <figure class="auth-form__logo">
        <img src="{{ asset('images/logo_site.webp') }}" alt="検定システム" srcset="">
    </figure>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="auth-form__wrap">
                    <form method="POST" action="{{ route('admin.register') }}" class="auth-form" novalidate>
                        @csrf

                        <div class="auth-form__item">
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control auth-form__input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="名前" required autocomplete="name" autofocus />

                                @error('name')
                                <span class="invalid-feedback err-msg" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="auth-form__item">
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control auth-form__input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="メールアドレス" required autocomplete="email" />

                                @error('email')
                                <span class="invalid-feedback err-msg" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="auth-form__item">
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control auth-form__input @error('password') is-invalid @enderror" name="password" placeholder="パスワード" required autocomplete="new-password" />

                                @error('password')
                                <span class="invalid-feedback err-msg" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="auth-form__item">
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control auth-form__input" name="password_confirmation" placeholder="パスワード(確認)" required autocomplete="new-password" />
                            </div>
                        </div>

                        <div class="auth-form__item">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="auth-form__btn">
                                    {{ __("登録する") }}
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
