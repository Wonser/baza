<!doctype html>
<html lang="eu">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <title>Warehouse</title>
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


<section class="account">
    <div class="account-nav">
        <div class="account-nav-head">
            <a href="#" class="logo">
                <img src="assets/img/logo.svg" alt="logo">
            </a>
            <div class="menu-account-btn close"></div>
        </div>
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
            <a href="#" class="account-nav-list-item active">
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
        <div class="account-main">
            <div class="account-main-item">
                <div class="account-main-item-head">
                    <div class="account-main-item-head-icon">
                        <img src="assets/img/diamond.svg">
                    </div>
                    <p class="h6">баланс: 3 060₽</p>
                </div>
                <div class="btns">
                    <a href="#" class="main-btn body-14mu">Пополнить</a>
                    <div class="primary-btn body-14mu pay-btn">перевести в игру</div>
                </div>
            </div>
            <div class="account-main-item">
                <div class="account-main-item-head">
                    <div class="account-main-item-head-icon">
                        <img src="assets/img/gift.svg">
                    </div>
                    <p class="h6">промокоды</p>
                </div>
                <div class="primary-btn body-14mu promo-btn">активировать промокод</div>
            </div>
        </div>
        <div class="account-list">
            <div class="account-list-head">
                <p class="h5">мой склад</p>
            </div>
            <div class="account-table">
                <div class="account-table-item account-table-item_head">
                    <div class="account-table-item-inner">
                        <span class="body-14mu">предмет</span>
                    </div>
                    <div class="account-table-item-inner">
                        <span class="body-14mu">количество</span>
                    </div>
                    <div class="account-table-item-inner">
                        <span class="body-14mu">действия</span>
                    </div>
                </div>
                <div class="account-table-item">
                    <div class="account-table-item-inner">
                        <p class="body-16rp">Агатион Прочелла</p>
                    </div>
                    <div class="account-table-item-inner">
                        <p class="body-16rp">1</p>
                    </div>
                    <div class="account-table-item-inner">
                        <div class="primary-btn body-14mu item-btn" data-item="Название предмета">отправить</div>
                    </div>
                </div>
                <div class="account-table-item">
                    <div class="account-table-item-inner">
                        <p class="body-16rp">Агатион Прочелла</p>
                    </div>
                    <div class="account-table-item-inner">
                        <p class="body-16rp">1</p>
                    </div>
                    <div class="account-table-item-inner">
                        <div class="primary-btn body-14mu item-btn" data-item="Название предмета">отправить</div>
                    </div>
                </div>
                <div class="account-table-item">
                    <div class="account-table-item-inner">
                        <p class="body-16rp">Агатион Прочелла</p>
                    </div>
                    <div class="account-table-item-inner">
                        <p class="body-16rp">1</p>
                    </div>
                    <div class="account-table-item-inner">
                        <div class="primary-btn body-14mu item-btn" data-item="Название предмета">отправить</div>
                    </div>
                </div>
                <div class="account-table-item">
                    <div class="account-table-item-inner">
                        <p class="body-16rp">Агатион Прочелла</p>
                    </div>
                    <div class="account-table-item-inner">
                        <p class="body-16rp">1</p>
                    </div>
                    <div class="account-table-item-inner">
                        <div class="primary-btn body-14mu item-btn" data-item="Название предмета">отправить</div>
                    </div>
                </div>
            </div>
        </div>
        <span class="body-16rp">© 2024 BAZA, Powered by L2CMS</span>
    </div>
</section>


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

<div style="display: none;">
    <div class="box-modal form-modal" id="promoModal">
        <form action="#" class="form-wrap">
            <div class="arcticmodal-close form-wrap-close">
                <img src="assets/img/close.svg" alt="svg" class="svg">
            </div>
            <p class="h5" style="margin-bottom: 0;">Активировать промокод</p>
            <label>
                <span class="body-12bu">Введите промокод</span>
                <input type="text" class="form-input" placeholder="">
            </label>
            <input type="submit" value="активировать" class="main-btn body-14mu">
        </form>
        <div class="modal-overlay arcticmodal-close"></div>
    </div>
</div>

<div style="display: none;">
    <div class="box-modal form-modal" id="paySucModal">
        <form action="#" class="form-wrap">
            <div class="arcticmodal-close form-wrap-close">
                <img src="assets/img/close.svg" alt="svg" class="svg">
            </div>
            <div class="suc-icon">
                <img src="assets/img/check.svg" alt="">
            </div>
            <p class="h5" style="margin-bottom: 0;">Баланс переведен в игру</p>
            <div class="arcticmodal-close main-btn body-14mu">Закрыть</div>
        </form>
        <div class="modal-overlay arcticmodal-close"></div>
    </div>
</div>

<div style="display: none;">
    <div class="box-modal form-modal" id="promoSucModal">
        <form action="#" class="form-wrap">
            <div class="arcticmodal-close form-wrap-close">
                <img src="assets/img/close.svg" alt="svg" class="svg">
            </div>
            <div class="suc-icon">
                <img src="assets/img/check.svg" alt="">
            </div>
            <p class="h5" style="margin-bottom: 0;">Промокод активирован</p>
            <div class="arcticmodal-close main-btn body-14mu">Закрыть</div>
        </form>
        <div class="modal-overlay arcticmodal-close"></div>
    </div>
</div>

<div style="display: none;">
    <div class="box-modal form-modal" id="sendModal">
        <form action="#" class="form-wrap">
            <div class="arcticmodal-close form-wrap-close">
                <img src="assets/img/close.svg" alt="svg" class="svg">
            </div>
            <input type="hidden" name="itemName" value="">
            <p class="h5">Отправить предмет<br> в игру</p>
            <p class="body-18rp grey">Агатион Прочелла</p>
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
                <span class="body-12bu">Количество</span>
                <div class="number-wrap">
                    <input type="number" class="form-input" min="0" max="100000000" value="0"  placeholder="0">
                    <div class="plus"></div>
                    <div class="minus"></div>
                </div>
            </label>
            <input type="submit" value="Отправить" class="main-btn body-14mu">
        </form>
        <div class="modal-overlay arcticmodal-close"></div>
    </div>
</div>

<div style="display: none;">
    <div class="box-modal form-modal" id="sendSucModal">
        <form action="#" class="form-wrap">
            <div class="arcticmodal-close form-wrap-close">
                <img src="assets/img/close.svg" alt="svg" class="svg">
            </div>
            <div class="suc-icon">
                <img src="assets/img/check.svg" alt="">
            </div>
            <p class="h5">предмет переведен в игру</p>
            <p class="body-18rp grey">Агатион Прочелла х 2</p>
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