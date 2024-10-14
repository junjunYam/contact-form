@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}" />
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
                    <a href="/login">login</a>
                </li>
            </ul>
        </nav>
    </div>
</header>

<main>
    <div class="section__content">
        <div class="section__ttl">
            <h2>Register</h2>
        </div>
        <div class="register-container">
            <form action="/register" class="register-form" method="post">
                @csrf
                <div class="register-form__item">
                    <h3 class="register-form__item-ttl">お名前</h3>
                    <input class="register-form__item-input" type="text" name="name" placeholder="例：山田　太郎">
                    @error('name')
                    <p class="register-form__error-msg">{{$errors->first('name')}}</p>
                    @enderror
                </div>
                <div class="register-form__item">
                    <h3 class="register-form__item-ttl">メールアドレス</h3>
                    <input class="register-form__item-input" type="text" name="email" placeholder="例：test@example.com">
                    @error('email')
                    <p class="register-form__error-msg">{{$errors->first('email')}}</p>
                    @enderror
                </div>
                <div class="register-form__item">
                    <h3 class="register-form__item-ttl">パスワード</h3>
                    <input class="register-form__item-input" type="text" name="password" placeholder="例：coachtech1106">
                    @error('password')
                    <p class="register-form__error-msg">{{$errors->first('password')}}</p>
                    @enderror
                </div>
                <div class="register-form__button">
                    <button class="register-form__button-submit" type="submit">登録</button>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection