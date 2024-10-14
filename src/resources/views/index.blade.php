<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
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
                <h2>Contact</h2>
            </div>
        </div>
        <form action="/confirm" class="contact-form" method="get">
            <div class="contact-form__item">
                <p class="contact-form__item-label required">お名前</p>
                <div class="contact-form__item-input">
                    <input type="text" class="contact-form__input-name" name="last-name" placeholder="例：山田">
                    <input type="text" class="contact-form__input-name" name="first-name" placeholder="例：太郎">
                </div>
            </div>
            <div class="contact-form__item">
                <p class="contact-form__item-label required">性別</p>
                <div class="contact-form__item-input">
                    <input type="radio" class="contact-form__input-gender" name="gender" value="男性" checked>男性
                    <input type="radio" class="contact-form__input-gender" name="gender" value="女性">女性
                    <input type="radio" class="contact-form__input-gender" name="gender" value="その他">その他
                </div>
            </div>
            <div class="contact-form__item">
                <p class="contact-form__item-label required">メールアドレス</p>
                <div class="contact-form__item-input">
                    <input type="text" class="contact-form__input-email" name="email" placeholder="例：test@example.com">
                </div>
            </div>
            <div class="contact-form__item">
                <p class="contact-form__item-label required">電話番号</p>
                <div class="contact-form__item-input">
                    <input type="text" class="contact-form__input-tel" name="tel-first" placeholder="080">
                    <div>-</div>
                    <input type="text" class="contact-form__input-tel" name="tel-second" placeholder="1234">
                    <div>-</div>
                    <input type="text" class="contact-form__input-tel" name="tel-third" placeholder="5678">
                </div>
            </div>
            <div class="contact-form__item">
                <p class="contact-form__item-label required">住所</p>
                <div class="contact-form__item-input">
                    <input type="text" class="contact-form__input-address" name="address" placeholder="例：東京都渋谷区千駄ヶ谷1-2-3">
                </div>
            </div>
            <div class="contact-form__item">
                <p class="contact-form__item-label">建物名</p>
                <div class="contact-form__item-input">
                    <input type="text" class="contact-form__input-building" name="building" placeholder="例：千駄ヶ谷マンション101">
                </div>
            </div>
            <div class="contact-form__item">
                <p class="contact-form__item-label required">お問い合わせの種類</p>
                <div class="contact-form__item-input">
                    <select name="category" id="" class="contact-form__select-category" required>
                        <option value="" selected hidden>選択してください</option>
                        <option value="delivery">商品のお届けについて</option>
                        <option value="exchange">商品の交換について</option>
                        <option value="trouble">商品トラブル</option>
                        <option value="inquiry">ショップへのお問い合わせ</option>
                        <option value="other">その他</option>
                    </select>
                </div>
            </div>
            <div class="contact-form__item">
                <p class="contact-form__item-label required">お問い合わせ内容</p>
                <div class="contact-form__item-input">
                    <textarea class="contact-form__input-detail" name="detail" placeholder="お問い合わせ内容をご記載ください"></textarea>
                </div>
            </div>
            <div class="contact-form__button">
                <button class="contact-form__button-submit" type="submit">確認画面</button>
            </div>
        </form>
    </main>
</body>
</html>