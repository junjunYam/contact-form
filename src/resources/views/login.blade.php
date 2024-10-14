@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}" />
@endsection

@section('body')
<header>
    <div class="header__inner">
        <h1 class="header__ttl">
            <a href="/">FashionablyLate</a>
        </h1>
        <nav class="header__nav">
            <ul class="header__nav-list">
                <li class="header__nav-item">
                    <a href="/register">register</a>
                </li>
            </ul>
        </nav>
    </div>
</header>

<main>
    <div class="section__content">
        <div class="section__ttl">
            <h2>Login</h2>
        </div>
        <div class="login-container">
            <form action="/login" class="login-form" method="post">
                @csrf
                <div class="login-form__item">
                    <h3 class="login-form__item-ttl">メールアドレス</h3>
                    <input class="login-form__item-input" type="text" name="email" placeholder="例：test@example.com">
                    @error('email')
                    <p class="login-form__error-msg">{{$errors->first('email')}}</p>
                    @enderror
                </div>
                <div class="login-form__item">
                    <h3 class="login-form__item-ttl">パスワード</h3>
                    <input class="login-form__item-input" type="text" name="password" placeholder="例：coachtech1106">
                    @error('password')
                    <p class="register-form__error-msg">{{$errors->first('password')}}</p>
                    @enderror
                </div>
                <div class="login-form__button">
                    <button class="login-form__button-submit" type="submit">ログイン</button>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection