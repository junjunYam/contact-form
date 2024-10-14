<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
</head>

<body>
    <header>
        <div class="header__inner">
            <h1 class="header__ttl">
                <a href="/">FashionablyLate</a>
            </h1>
        </div>
    </header>

    <main>
        <div class="section__content">
            <div class="section__ttl">
                <h2>Confirm</h2>
            </div>
            <table class="contact-table">
                <tr class="contact-table__row">
                    <th class="contact-table__header">お名前</th>
                    <td class="contact-table__data">山田　太郎</td>
                </tr>
                <tr class="contact-table__row">
                    <th class="contact-table__header">性別</th>
                    <td class="contact-table__data">男性</td>
                </tr>
                <tr class="contact-table__row">
                    <th class="contact-table__header">メールアドレス</th>
                    <td class="contact-table__data">test@example.com</td>
                </tr>
                <tr class="contact-table__row">
                    <th class="contact-table__header">電話番号</th>
                    <td class="contact-table__data">08012345678</td>
                </tr>
                <tr class="contact-table__row">
                    <th class="contact-table__header">住所</th>
                    <td class="contact-table__data">東京都渋谷区千駄ヶ谷1-2-3</td>
                </tr>
                <tr class="contact-table__row">
                    <th class="contact-table__header">建物名</th>
                    <td class="contact-table__data">千駄ヶ谷マンション101</td>
                </tr>
                <tr class="contact-table__row">
                    <th class="contact-table__header">お問い合わせの種類</th>
                    <td class="contact-table__data">商品の交換について</td>
                </tr>
                <tr class="contact-table__row">
                    <th class="contact-table__header">お問い合わせ内容</th>
                    <td class="contact-table__data">届いた商品が注文した商品ではありませんでした。商品の取り換えをお願いします。</td>
                </tr>
            </table>
            <div class="contact-form__buttons">
                <form action="/thanks" class="contact-form__submit" method="get">
                    <button class="contact-form__button-submit" type="submit">送信</button>
                </form>
                <a href="/" class="contact-form__button-modify">修正</a>
            </div>
        </div>
    </main>
</body>
</html>