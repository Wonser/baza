<!doctype html>
<html lang="eu">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <title>Registration</title>
    <link rel="stylesheet" href="assets/css/jquery.arcticmodal-0.3.css" media="all">
    <link rel="stylesheet" href="assets/css/animate.min.css" media="all">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/main.min.css" media="all">
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <link rel="icon" href="assets/img/favicon.svg">
    <link rel="apple-touch-icon" href="assets/img/favicon.png">
    <meta name="robots" content="noindex">
</head>

<body> 

<?php include 'header.php'; ?>

    <main>
        <section class="form">
            <picture class="form-bg">
                <source srcset="assets/img/reg.webp">
                <img src="assets/img/reg.png" alt="baza">
            </picture>
            <form action="#" class="form-wrap">
                <p class="h5">регистрация</p>
                <span class="body-18rp">Придумайте пароль, ранее не используемый на других проектах.</span>
                <label>
                    <span class="body-12bu">email</span>
                    <input type="email" class="form-input" placeholder="Введите email">
                </label>
                <label>
                    <span class="body-12bu">пароль</span>
                    <div class="input-wrap">
                        <input type="email" class="form-input error-input" placeholder="Введите пароль">
                        <img src="assets/img/eye.svg" alt="" class="pass-icon">
                    </div>
                    <div class="error-text body-12m">Critical</div>
                </label>
                <label>
                    <span class="body-12bu">подтверждение пароля</span>
                    <div class="input-wrap">
                        <input type="email" class="form-input" placeholder="Введите пароль">
                        <img src="assets/img/eye.svg" alt="" class="pass-icon">
                    </div>
                </label>
                <div class="form-wrap-inner">
                    <label class="checkbox-input">
                        <input type="checkbox" value="accept">
                        <div class="checkmark"></div>
                        <p class="body-16rp">
                            <span>Я согласен с</span>
                            <a href="#"> политикой конфиденциальности </a>
                            <span>и</span>  
                            <a href="#">условиями использования</a>
                        </p>
                    </label>
                </div>
                <input type="submit" value="зарегистрироваться" class="main-btn body-14mu">
                <p class="body-16rp">
                    <span>У вас уже есть аккаунт?</span>
                    <a href="#">Войти</a>
                </p>
            </form>
        </section>
    </main>

    <footer class="footer">
        <div class="footer-left">
            <a href="#" class="logo">
                <img src="assets/img/logo-dark.svg" alt="logo" class="svg">
            </a>
            <p class="body-14m">
                © 2024 BAZA. Все товарные знаки являются собственностью их владельцев.
            </p>
        </div>
        <div class="footer-mid">
            <div class="footer-mid-partners">
                <div class="footer-mid-partners-item hover">
                    <img src="assets/img/visa.svg" class="svg">
                </div>
                <div class="footer-mid-partners-item hover">
                    <img src="assets/img/mc.svg" class="svg">
                </div>
                <div class="footer-mid-partners-item hover">
                    <img src="assets/img/mir.svg" class="svg">
                </div>
                <div class="footer-mid-partners-item hover">
                    <img src="assets/img/bitcoin.svg" class="svg">
                </div>
                <div class="footer-mid-partners-item hover">
                    <img src="assets/img/sbp.svg" class="svg">
                </div>
            </div>
            <p class="body-14m">HONKONG TANG DYNASTY INDUSTRY TRADE LIMITED.<br> Company Registration No. : 2658020</p>
        </div>
        <div class="footer-right">
            <a href="#" class="body-14m">Политика конфиденциальности</a>
            <a href="#" class="body-14m">Пользовательское соглашение</a>
            <a href="#" class="body-14m">Политика Cookie</a>
        </div>
    </footer>

<?php include 'footer.php'; ?>