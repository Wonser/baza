<!doctype html>
<html lang="eu">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <title>Support</title>
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
            <a href="#" class="account-nav-list-item active">
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
        <div class="account-chat">
            <div class="account-chat-left">
                <div class="search">
                    <input type="text" class="form-input" placeholder="Поиск">
                    <div class="chat-add"></div>
                </div>
                <div class="account-chat-left-wrap">
                    <span class="body-12mu">Тикеты</span>
                </div>
            </div>
            <div class="account-chat-right empty">
                <div class="main-btn body-14mu chat-add">Создать тикет</div>
            </div>
            <div class="account-chat-footer">
                <div class="main-btn body-14mu chat-add">Создать тикет</div>
            </div>
        </div>
        <span class="body-16rp">© 2024 BAZA, Powered by L2CMS</span>
    </div>
</section>


<div style="display: none;">
    <div class="box-modal form-modal" id="chatModal">
        <form action="#" class="form-wrap">
            <div class="arcticmodal-close form-wrap-close">
                <img src="assets/img/close.svg" alt="svg" class="svg">
            </div>
            <p class="h5">СОздать тикет</p>         
            <div class="form-wrap__box">
                <div class="form-wrap__left">
                    <label>
                        <span class="body-12bu">Заголовок</span>
                        <input type="text" class="form-input" placeholder="Введите заголовок">
                    </label>
                    <label>
                        <span class="body-12bu">Описание</span>
                        <textarea class="form-input" placeholder="Введите описание"></textarea>
                    </label>
                    <label>
                        <span class="body-12bu">Категория</span>
                        <div class="custom-select">
                            <select class="form-input">
                                <option value="" disabled selected>Выберите из списка</option>
                                <option value="1">Технический отдел</option>
                            </select>
                        </div>
                    </label>
                </div>
                <div class="form-wrap__right">
                    <label class="input-file">
                        <span class="body-12bu">Изображение (JPG или PNG)</span>
                        <input type="file" name="file" accept="image/*">
                        <div class="file-image form-input body-16rp">
                            <img src="#" alt="" class="file-preview">
                            <img src="assets/img/img.svg" alt="">
                            <p class="">Вставье сюда изображение из буфера обмена или перенесите</p>
                            <div class="form-input">Выберите файл</div>
                        </div>
                        <div class="file-btn body-16rp">
                            <div class="btn">Выберите файл</div>
                            <div class="file-btn-text">Файл не выбран</div>
                        </div>           
                    </label>
                    <div class="file-remove">
                        <img src="assets/img/trash.svg" alt="">
                    </div>
                </div>
            </div>
            <input type="submit" value="Создать тикет" class="main-btn body-14mu">
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