<!doctype html>
<html lang="eu">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <title>Donate</title>
    <link rel="stylesheet" href="assets/css/jquery.arcticmodal-0.3.css" media="all">
    <link rel="stylesheet" href="assets/css/animate.min.css" media="all">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/main.min.css" media="all">
    <link rel="stylesheet" href="assets/css/dashboard.min.css" media="all">
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <link rel="icon" href="assets/img/favicon.svg">
    <link rel="apple-touch-icon" href="assets/img/favicon.png">
    <meta name="robots" content="noindex">
</head>

<body> 


<section class="account">
    <div class="account-nav">
        <div class="account-nav-head">
            <a href="#" class="logo">
                <img src="assets/img/logo.svg" alt="logo">
            </a>
            <div class="menu-account-btn close"></div>
        </div>
        <div class="account-nav-list">
            <span class="body-12mu">Выберите сервер</span>
            <form action="#">
                <div class="custom-select">
                    <select class="form-input">
                        <option value="1" selected>SEASON 2 (NEW)</option>
                        <option value="2">SEASON 1</option>
                    </select>
                </div>
            </form>
        </div>
        <div class="account-nav-devider"></div>
        <div class="account-nav-list">
            <span class="body-12mu">личный кабинет</span>
            <a href="#" class="account-nav-list-item">
                <img src="assets/img/nav-icon1.svg" class="svg" alt="">
                <p class="body-16mp">Главная страница</p>
            </a>
            <a href="#" class="account-nav-list-item">
                <img src="assets/img/nav-icon2.svg" class="svg" alt="">
                <p class="body-16mp">Мои персонажи</p>
            </a>
            <a href="#" class="account-nav-list-item">
                <img src="assets/img/nav-icon3.svg" class="svg" alt="">
                <p class="body-16mp">Мой склад</p>
            </a>
            <div class="account-nav-list-item parrent-item">
                <img src="assets/img/nav-icon4.svg" class="svg" alt="">
                <p class="body-16mp">Баланс</p>
            </div>
            <div class="sub-menu">
                <a href="#" class="sub-menu-item">
                    <p class="body-16mp">Пополнить</p>
                    <div class="sum body-12m">0.00</div>
                </a>
                <div class="sub-menu-item pay-btn">
                    <p class="body-16mp">Отправить в игру</p>
                </div>
            </div>
            <a href="#" class="account-nav-list-item">
                <img src="assets/img/nav-icon5.svg" class="svg" alt="">
                <p class="body-16mp">Поддержка</p>
            </a>
        </div>
    </div>
    <div class="account-wrap">
        <div class="account-head">
            <div class="menu-account-btn"></div>
            <a href="#">
                <img src="assets/img/web.svg" alt="web">
            </a>
            <a href="#" class="body-14mu lang">RU</a>
            <div class="user">
                <img src="assets/img/avatar.png" alt="web">
            </div>

            <div class="user-modal">
                <div class="user-modal-head">
                    <img src="assets/img/avatar.png" alt="web">
                    <div class="user-modal-head-content">
                        <p class="body-16rp">mymail@mail.com</p>
                        <span class="body-16rp">Пользователь</span>
                    </div>
                </div>
                <div class="user-modal-links">
                    <a href="#" class="user-modal-link body-16rp">
                        <img src="assets/img/setting.svg" alt="">
                        Настройки
                    </a>
                    <a href="#" class="user-modal-link body-16rp">
                        <img src="assets/img/nav-icon4.svg" alt="">
                        Пополнить баланс
                    </a>
                </div>
                <div class="user-modal-btn">
                    <a href="#" class="main-btn body-14mu">Выход</a>
                </div>
            </div>
        </div>
        <div class="account-payment">
            <div class="account-payment-wrap">
                <p class="h6">Вы получите</p>
                <div class="price">
                    <img src="assets/img/diamond.svg" class="svg">
                    <p class="h3">10 000 USD</p>
                </div>
                <div class="number-wrap">
                    <input type="number" class="form-input" min="0" max="100000000" value="0"  placeholder="0">
                    <div class="plus"></div>
                    <div class="minus"></div>
                </div>
                <div class="total body-16rp">
                    Всего: <span>10 000</span> USD
                </div>
            </div>
            <p class="h7">выберите способ оплаты</p>
            <div class="payments-list payments-list_filter">
                <label class="payments-list-item" data-filter=".pay1" data-title="выберите платежную систему">
                    <input type="radio" value="payment1" name="payment">
                    <img src="assets/img/payment1.svg" alt="">
                    <p class="body-12mu">ru</p>
                </label>
                <label class="payments-list-item" data-filter=".pay2" data-title="выберите платежную систему">
                    <input type="radio" value="payment2" name="payment">
                    <img src="assets/img/payment2.svg" alt="">
                    <p class="body-12mu">ua</p>
                </label>
                <label class="payments-list-item" data-filter=".pay3" data-title="выберите платежную систему">
                    <input type="radio" value="payment3" name="payment">
                    <img src="assets/img/payment2.svg" alt="">
                    <p class="body-12mu">international</p>
                </label>
                <label class="payments-list-item" data-filter=".pay4" data-title="выберите платежную систему">
                    <input type="radio" value="payment4" name="payment">
                    <img src="assets/img/payment3.svg" alt="">
                </label>
                <label class="payments-list-item" data-filter=".pay5" data-title="свяжитесь с нами">
                    <input type="radio" value="payment5" name="payment">
                    <img src="assets/img/payment4.svg" alt="">
                    <p class="body-12mu">manual mode</p>
                </label>
                <label class="payments-list-item" data-filter=".pay6" data-title="свяжитесь с нами">
                    <input type="radio" value="payment6" name="payment">
                    <img src="assets/img/payment5.svg" alt="">
                    <p class="body-12mu">manual mode</p>
                </label>
            </div>
            <p class="h7 pay-title">выберите платежную систему</p>
            <div class="payments-list payments-list_col">
                <label class="payments-list-item pay1">
                    <input type="radio" value="paypalych" name="pay">
                    <img src="assets/img/payment6.svg" alt="">
                </label>
                <label class="payments-list-item pay1">
                    <input type="radio" value="prime" name="pay">
                    <img src="assets/img/payment7.svg" alt="">
                </label>
                <label class="payments-list-item pay4">
                    <input type="radio" value="cryptocloud" name="pay">
                    <img src="assets/img/payment8.svg" alt="">
                </label>
                <label class="payments-list-item pay2 pay3">
                    <input type="radio" value="unitpay" name="pay">
                    <img src="assets/img/payment9.svg" alt="">
                </label>
                <label class="payments-list-item pay5 pay6">
                    <input type="radio" value="telegram" name="pay">
                    <img src="assets/img/payment10.svg" alt="">
                </label>
                <label class="payments-list-item pay5 pay6">
                    <input type="radio" value="discord" name="pay">
                    <img src="assets/img/payment11.svg" alt="">
                </label>
            </div>
            <p class="body-16rp">Цена может быть увеличена из-за комиссии платежной системы</p>
            <div class="prices">
                <p class="h8"><span>USD </span> 10000</p>
                <p class="h8"><span>rub </span> 922405.89</p>
                <p class="h8"><span>eur </span> 8952.15</p>
                <p class="h8"><span>uah </span> 413467.33</p>
            </div>
            <div class="main-btn body-14mu payment-btn">Оплатить</div>
        </div>
        <span class="body-16rp">© 2024 BAZA, Powered by L2CMS</span>
    </div>
</section>

<div style="display: none;">
    <div class="box-modal form-modal" id="paymentSucModal">
        <form action="#" class="form-wrap">
            <div class="arcticmodal-close form-wrap-close">
                <img src="assets/img/close.svg" alt="svg" class="svg">
            </div>
            <div class="suc-icon">
                <img src="assets/img/check.svg" alt="">
            </div>
            <p class="h5" style="margin-bottom: 0;">Баланс пополнен</p>
            <div class="arcticmodal-close main-btn body-14mu">Закрыть</div>
        </form>
        <div class="modal-overlay arcticmodal-close"></div>
    </div>
</div>

<div style="display: none;">
    <div class="box-modal form-modal" id="payModal">
        <form action="#" class="form-wrap">
            <div class="arcticmodal-close form-wrap-close">
                <img src="assets/img/close.svg" alt="svg" class="svg">
            </div>
            <p class="h5">Перевести баланс в игру</p>
            <label>
                <span class="body-12bu">Персонаж</span>
                <div class="custom-select">
                    <select class="form-input">
                        <option value="" disabled selected>Выберите персонажа</option>
                        <option value="1">Персонаж 1</option>
                        <option value="2">Персонаж 2</option>
                    </select>
                </div>
            </label>
            <label>
                <span class="body-12bu">Сумма</span>
                <div class="number-wrap">
                    <input type="number" class="form-input" min="0" max="100000000" value="0"  placeholder="0">
                    <div class="plus"></div>
                    <div class="minus"></div>
                </div>
            </label>
            <input type="submit" value="подтвердить" class="main-btn body-14mu">
        </form>
        <div class="modal-overlay arcticmodal-close"></div>
    </div>
</div>


<?php include 'footer.php'; ?>