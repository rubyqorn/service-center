<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <link rel="icon" href="img/favicon.svg" type="image/svg+xml">
    <link rel="stylesheet" href="/js/owlcarousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/js/owlcarousel/dist/assets/owl.theme.default.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,100;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

    <nav class="col-lg-12 navbar-links-list" id="navbar-links">
        <div class="container">
            <ul class="links-list">
                <li class="list-link">
                    <a href="/contacts.php">
                        Контакты 
                        <span class="vertical-line"></span>
                    </a>
                </li>
                <li class="list-link">
                    <a href="/pay-by-card.php">
                        Оплата картой 
                        <span class="vertical-line"></span>
                    </a>
                </li>
                <li class="list-link">
                    <a href="/deliver.php">
                        Доставка 
                        <span class="vertical-line"></span>
                    </a>
                </li>
                <li class="list-link">
                    <a href="/about.php">
                        О компании 
                        <span class="vertical-line"></span>
                    </a>
                </li>
                <li class="list-link">
                    <a href="/reviews.php">
                        Отзывы 
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <header class="col-lg-12 service-info" id="service-info">
        <div class="container justify-content-between">
            <div class="logo">
                <div class="info-item">
                    <a href="/"><img src="img/logo.svg" alt=""></a>
                </div>
                <div class="info-item">
                    <span class="title">РЕМОНТ МАРЬИНО</span>
                    <p class="description">Сервисный центр</p>
                </div>
            </div>
            <span class="vertical-line"></span>
            <div class="address">
                <div class="info-item">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="info-item">
                    <span>Москва, м. Братиславская,</span>
                    <p>Мячковский бульвар, д. 6, корп. 1</p>
                </div>
            </div>
            <div class="feedback" id="feedback">
                <div class="info-item">
                    <button class="btn-call" id="request-form">Заказать звонок</button>
                </div>
            </div>
            <span class="vertical-line"></span>
            <div class="schedule">
                <div class="info-item">
                    <a href="tel:+79857848490" class="phone-service-number">+7 (985) 784-84-90</a>
                    <p class="schedule">Ежедневно 10:00-21:00</p>
                </div>
            </div>
        </div>
    </header>

    <div id="request-form-modal" class="modal">
        <div class="modal-content">
            <div class="col-lg-12">
                <span class="close">&times;</span>
            </div>
            <div class="col-lg-9" id="form-title">
                <p class="title-text">
                    Заказать звонок
                </p>
                <p class="preview-text">
                    Оставьте своё имя и номер телефона.
                    Мы свяжемся с Вами в течении 15 минут.
                </p>
            </div>
            <div class="col-lg-9" id="form">
                <form action="/" method="post">
                    <div class="col-lg-12" id="name">
                        <input type="text" name="name" class="field" placeholder="Имя">
                    </div>
                    <div class="col-12" id="phone">
                        <input type="text" name="phone" class="field" placeholder="Телефон">
                    </div>
                    <div class="col-12">
                        <span class="border-line"></span>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="send-btn">Отправить</button>
                    </div>
                    <div class="col-12" id="privacy-policy">
                        <input type="checkbox" name="privacy-policy" checked>
                        <span>
                            Я согласен на обработку персональных данных
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <header class="col-lg-12 repair-navbar" id="repair-navbar">
        <div class="container">
            <div class="menu container justify-content-between">
            <div class="repair-link">
                <i class="fas fa-mobile-alt"></i>
                <div class="menu-item">
                    <a href="repair.php" class="repair-title">
                        <span>Ремонт</span>
                        <p>Телефонов</p>
                    </a>
                </div>
            </div>
            <div class="repair-link">
                <i class="fas fa-tablet-alt"></i>
                <div class="menu-item">
                    <a href="repair.php" class="repair-title">
                        <span>Ремонт</span>
                        <p>Планшетов</p>
                    </a>
                </div>
            </div>
            <div class="repair-link">
                <i class="fas fa-laptop"></i>
                <div class="menu-item">
                    <a href="repair.php" class="repair-title">
                        <span>Ремонт</span>
                        <p>Ноутбуков</p>
                    </a>
                </div>
            </div>
            <div class="repair-link">
                <i class="fas fa-server"></i>
                <div class="menu-item">
                    <a href="repair.php" class="repair-title">
                        <span>Ремонт</span>
                        <p>Компьютеров</p>
                    </a>
                </div>
            </div>
            <div class="repair-link">
                <i class="fas fa-desktop"></i>
                <div class="menu-item">
                    <a href="repair.php" class="repair-title">
                        <span>Ремонт</span>
                        <p>Моноблоков</p>
                    </a>
                </div>
            </div>
            <div class="repair-link">
                <i class="fas fa-gamepad"></i>
                <div class="menu-item">
                    <a href="repair.php" class="repair-title">
                        <span>Ремонт</span>
                        <p>Приставок</p>
                    </a>
                </div>
            </div>
            <div class="repair-link">
                <i class="fas fa-clock"></i>
                <div class="menu-item">
                    <a href="repair.php" class="repair-title">
                        <span>Ремонт</span>
                        <p>Умных часов</p>
                    </a>
                </div>
            </div>
            <div class="repair-link">
                <i class="fas fa-microchip"></i>
                <div class="menu-item">
                    <a href="repair.php" class="repair-title">
                        <span>Ремонт</span>
                        <p>Видеокарт</p>
                    </a>
                </div>
            </div>
            </div>
            <div class="toggle-menu">
                <button class="menu-toggler"><i class="fas fa-bars"></i></button>
                <div class="col-lg-12">
                    <div class="repair-link">
                        <i class="fas fa-mobile-alt"></i>
                        <div class="menu-item">
                            <a href="repair.php" class="repair-title">
                                <span>Ремонт</span>
                                <p>Телефонов</p>
                            </a>
                        </div>
                    </div>
                    <div class="repair-link">
                        <i class="fas fa-tablet-alt"></i>
                        <div class="menu-item">
                            <a href="repair.php" class="repair-title">
                                <span>Ремонт</span>
                                <p>Планшетов</p>
                            </a>
                        </div>
                    </div>
                    <div class="repair-link">
                        <i class="fas fa-laptop"></i>
                        <div class="menu-item">
                            <a href="repair.php" class="repair-title">
                                <span>Ремонт</span>
                                <p>Ноутбуков</p>
                            </a>
                        </div>
                    </div>
                    <div class="repair-link">
                        <i class="fas fa-server"></i>
                        <div class="menu-item">
                            <a href="repair.php" class="repair-title">
                                <span>Ремонт</span>
                                <p>Компьютеров</p>
                            </a>
                        </div>
                    </div>
                    <div class="repair-link">
                        <i class="fas fa-desktop"></i>
                        <div class="menu-item">
                            <a href="repair.php" class="repair-title">
                                <span>Ремонт</span>
                                <p>Моноблоков</p>
                            </a>
                        </div>
                    </div>
                    <div class="repair-link">
                        <i class="fas fa-gamepad"></i>
                        <div class="menu-item">
                            <a href="repair.php" class="repair-title">
                                <span>Ремонт</span>
                                <p>Приставок</p>
                            </a>
                        </div>
                    </div>
                    <div class="repair-link">
                        <i class="fas fa-clock"></i>
                        <div class="menu-item">
                            <a href="repair.php" class="repair-title">
                                <span>Ремонт</span>
                                <p>Умных часов</p>
                            </a>
                        </div>
                    </div>
                    <div class="repair-link">
                        <i class="fas fa-microchip"></i>
                        <div class="menu-item">
                            <a href="repair.php" class="repair-title">
                                <span>Ремонт</span>
                                <p>Видеокарт</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>