@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
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
                    <a href="/login">logout</a>
                </li>
            </ul>
        </nav>
    </div>
</header>

<main>
    <div class="section__content">
        <div class="section__ttl">
            <h2>Admin</h2>
        </div>
        <div class="admin__form">
            <form action="/admin/search" class="search-form" method="get">
                @csrf
                <input class="search-form__item-input" type="text" name="keyword" placeholder="名前やメールアドレスを入力してください" >
                <select name="gender" class="search-form__gender-select">
                    <option value="" selected hidden>性別</option>
                    <option value="">全部</option>
                    <option value="1">男性</option>
                    <option value="2">女性</option>
                    <option value="3">その他</option>
                </select>
                <select name="category_id" class="search-form__category-select">
                    <option value="" selected hidden>お問い合わせの種類</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->content }}</option>
                    @endforeach
                </select>
                <input class="search-form__date-input" type="date" name="created_at">
                <div class="search-form__button">
                    <button class="search-form__button-submit" type="submit">検索</button>
                </div>
            </form>
            <form action="/admin" class="reset-form" method="get">
                @csrf
                <div class="reset-form__button">
                    <button class="reset-form__button-submit" type="submit">リセット</button>
                </div>
            </form>
        </div>
        <div class="admin__item">
            <!-- <div class="admin-export__button">
                <button class="admin-export__button-submit" type="submit">エクスポート</button>
            </div> -->
        </div>
        <div class="admin-table">
            <table class="admin-table__inner">
                <tr class="admin-table__row">
                    <th class="admin-table__header">
                        <p>お名前</p>
                    </th>
                    <th class="admin-table__header">
                        <p>性別</p>
                    </th>
                    <th class="admin-table__header">
                        <p>メールアドレス</p>
                    </th>
                    <th class="admin-table__header">
                        <p>お問い合わせの種類</p>
                    <th class="admin-table__header"></th>
                </tr>
                @foreach ($contacts as $contact)
                <tr class="admin-table__row">
                    <td class="admin-table__item">
                        <p class="admin-table__item-name">{{ $contact->last_name . "　" .  $contact->first_name }}</p>
                    </td>
                    <td class="admin-table__item">
                        @if ($contact->gender == 1)
                            <p class="admin-table__item-gender">男性</p>
                        @elseif ($contact->gender == 2)
                            <p class="admin-table__item-gender">女性</p>
                        @else
                            <p class="admin-table__item-gender">その他</p>
                        @endif
                    </td>
                    <td class="admin-table__item">
                        <p class="admin-table__item-email">
                            {{ $contact->email }}
                        </p>
                    </td>
                    <td class="admin-table__item">
                        <p class="admin-table__item-category">{{ $contact['category']['content'] }}</p>
                    </td>
                    <td class="admin-table__item">
                        <button class="admin-detail__open-button" popovertarget="admin-popover" popovertargetaction="show">詳細</button>
                        <div class="admin-detail__popover" id="admin-popover" popover>
                            <div class="admin-detail__close">
                                <button class="admin-detail__close-button" popovertarget="admin-popover" popovertargetaction="admin-popover">×</button>
                            </div>
                            <div class="admin-detail__container">
                                <div class="admin-detail__item">
                                    <p class="admin-detail__item-label">お名前</p>
                                    <p class="admin-detail__item-data">{{ $contact->last_name . "　" .  $contact->first_name }}</p>
                                </div>
                                <div class="admin-detail__item">
                                    <p class="admin-detail__item-label">性別</p>
                                    @if ($contact->gender == 1)
                                        <p class="admin-detail__item-data">男性</p>
                                    @elseif ($contact->gender == 2)
                                        <p class="admin-detail__item-data">女性</p>
                                    @else
                                        <p class="admin-detail__item-data">その他</p>
                                    @endif
                                </div>
                                <div class="admin-detail__item">
                                    <p class="admin-detail__item-label">メールアドレス</p>
                                    <p class="admin-detail__item-data">{{ $contact->email }}</p>
                                </div>
                                <div class="admin-detail__item">
                                    <p class="admin-detail__item-label">電話番号</p>
                                    <p class="admin-detail__item-data">{{ str_replace('-', '', $contact->tell) }}</p>
                                </div>
                                <div class="admin-detail__item">
                                    <p class="admin-detail__item-label">住所</p>
                                    <p class="admin-detail__item-data">{{ substr($contact->address, 7,strlen($contact->address)-7) }}</p>
                                </div>
                                <div class="admin-detail__item">
                                    <p class="admin-detail__item-label">建物名</p>
                                    <p class="admin-detail__item-data">{{ $contact->building }}</p>
                                </div>
                                <div class="admin-detail__item">
                                    <p class="admin-detail__item-label">お問い合わせの種類</p>
                                    <p class="admin-detail__item-data">{{ $contact['category']['content'] }}</p>
                                </div>
                                <div class="admin-detail__item">
                                    <p class="admin-detail__item-label">お問い合わせ内容</p>
                                    <p class="admin-detail__item-data">{{ $contact->detail }}</p>
                                </div>
                            </div>
                            <form action="/admin/delete" class="admin-detail__delete-form"method="post">
                                @method('DELETE')
                                @csrf
                                <input type="hidden" name="id" value="{{ $contact['id'] }}">
                                <button class="admin-detail__delete-button" type="submit">削除</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</main>
@endsection