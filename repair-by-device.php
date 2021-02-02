    <?php 
        $title = 'Repair iPhone';
        require 'parts/header.php';
    ?>

    <section class="container" id="breadcrumbs">
        <div class="col-7">
            <a href="/" class="breadcrumb-item">Главная</a>
            <a href="/" class="breadcrumb-item"> / Ремонт телефонов</a>
            <a href="/" class="breadcrumb-item"> / Apple</a>
            <span class="active-breadcrumb"> / iPhone 12 Pro Max</span>
        </div>
    </section>

    <section class="container" id="repair-device">
        <div class="col-12" id="wrapper">
            <div class="col-12" id="description">
                <div class="col-2" id="image">
                    <img src="img/iphone-12-pro-max.png" alt="">
                </div>
                <div class="col-7" id="repair-description">
                    <div class="col-10" id="description-text">
                        <p class="title">
                            РЕМОНТ IPHONE 12 PRO MAX
                        </p>
                        <p class="description">
                            Сломался Apple iPhone 12 Pro Max? Звоните! Выполним срочную диагностику и ремонт, с помощью современного оборудования и оригинальных запчастей. Гарантируем качество и прозрачность ремонта.
                        </p>
                        <ul class="list">
                            <li><span class="text-list">Согласованный ремонт. Любые формы оплаты</span></li>
                            <li><span class="text-list">Обслуживание физических и юридических лиц</span></li>
                            <li><span class="text-list">Конфиденциальность и сохранение данных</p></li>
                            <li><span class="text-list">Комфортное ожидание во время ремонта</span></li>
                        </ul>
                    </div>
                    <div class="col-3" id="cards">
                        <div class="card" id="green-card">
                            <p class="description">
                                БРОНЕСТЕКЛО 
                            </p>
                            <p class="bolded">
                                <b>В ПОДАРОК</b>
                            </p>
                        </div>
                        <div class="card" id="blue-card">
                            <p class="description">
                                ОБМЕН 
                            </p>
                            <p class="bolded">
                                <b>НА НОВЫЙ</b> 
                            </p>
                        </div>
                        <div class="card" id="lightblue-card">
                            <p class="description">
                                ОПЛАТА 
                            </p>
                            <p class="bolded">
                                <b>КАРТОЙ</b> 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container" id="repair-price-time">
        <div class="col-12" id="wrapper">
            <div class="col-7" id="price-time">
                <div class="col-10" id="list">
                    <div class="col-6">
                        <div class="col-12" id="title">
                            <i class="fas fa-money-bill"></i>
                            <span>Цена</span>
                        </div>
                        <div class="col-12" id="description">
                            <p class="description-text">
                                от 1200 Руб.
                            </p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="col-12" id="title">
                            <i class="far fa-clock"></i>
                            <span>Время</span>
                        </div>
                        <div class="col-12" id="description">
                            <p class="description-text">
                                от 15 мин.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-3" id="button">
                    <button class="order-btn" id="request-form">Заказать ремонт</button>
                </div>
            </div>
        </div>
    </section>

    <section class="container" id="repair-device-benefits">
        <div class="col-12" id="wrapper">
            <div class="col-4" id="benefit">
                <div class="col-4">
                    <i class="far fa-clock"></i>
                </div>
                <div class="col-8">
                    <p class="title">СРОЧНЫЙ РЕМОНТ</p>
                    <ul id="benefits-list">
                        <li>- Ремонт за 1 час</li>
                        <li>- Срочная диагностика</li>
                        <li>- Ремонт в Вашем присутствии</li>
                    </ul>
                </div>
            </div>

            <div class="col-4" id="benefit">
                <div class="col-4">
                    <i class="fas fa-money-bill"></i>
                </div>
                <div class="col-8">
                    <p class="title">ГАРАНТИЯ КАЧЕСТВА</p>
                    <ul id="benefits-list">
                        <li>- Оригинальные детали</li>
                        <li>- Гарантия 100 дней</li>
                        <li>- Оплата по факту</li>
                    </ul>
                </div>
            </div>

            <div class="col-4" id="benefit">
                <div class="col-4">
                    <i class="far fa-credit-card"></i>
                </div>
                <div class="col-8">
                    <p class="title">СПОСОБЫ ОПЛАТЫ</p>
                    <ul id="benefits-list">
                        <li>- Оплата картой</li>
                        <li>- Оплата через банк</li>
                        <li>- Рассрочка и кредит</li>
                    </ul>
                </div>
            </div>

            <div class="col-4" id="benefit">
                <div class="col-4">
                    <i class="fas fa-parking"></i>
                </div>
                <div class="col-8">
                    <p class="title">МЕТРО И ПАРКОВКА</p>
                    <ul id="benefits-list">
                        <li>- 2 минуты от метро</li>
                        <li>- Парковка бесплатно</li>
                        <li>- Курьерская служба</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <?php
        $tableTitle = 'ЦЕНЫ НА РЕМОНТ IPHONE 12 PRO MAX С УЧЕТОМ ЗАПЧАСТЕЙ';
        require 'parts/price-table.php';
        require 'parts/accordion.php';
    ?>

    <section class="container" id="repair-device-description">
        <div class="col-12" id="wrapper">
            <div class="col-12" id="title-text">
                <p class="describe-text">
                    Даже такой качественный гаджет как iPhone 12 Pro Max не застрахован от ударов и падений, от попадания влаги, повреждений и брака. В сервисном центре в Москве рядом со станцией метро Братиславская вам предложат услуги по ремонту Айфон 12 Про Макс любой сложности.
                </p>
            </div>
            <div class="col-12" id="repair-description">
                <p class="title">
                    Нужно отремонтировать iPhone 12 Pro Max?
                </p>
                <p class="sub-text">
                    Предварительная диагностика для выявления причин выхода из строя гаджета проводится в сервисном центре бесплатно. 
                </p>
                <p class="sub-text">
                    После выявления поломок и причин их появления выполняется ремонт, который включает разные работы из нижеприведенного перечня: 
                </p>
                <ul id="list">
                    <li>замену экрана в сборе с дисплеем;</li>
                    <li>замену стекла задней крышки;</li>
                    <li>замену стекла отдельно от дисплея;</li>
                    <li>ремонт материнской платы;</li>
                    <li>замену разъема зарядки;</li>
                    <li>замену аккумулятора;</li>
                    <li>чистку устройства после попадания жидкости.</li>
                </ul>
            </div>
            <div class="col-12" id="repair-description">
                <p class="title">
                    Преимущества обращения в сервис 
                </p>
                <ul id="list">
                    <li>Мастера центра имеют все необходимые ресурсы для предоставления широкого спектра услуг по ремонту iPhone с предоставлением фирменной гарантии на 3 месяца.</li>
                    <li>Оплатить ремонт можно наличными, картой, оформить рассрочку или кредит.</li>
                    <li>В перечень услуг входит курьерская служба доставки. </li>
                </ul>
                <p class="sub-text">
                    Подавайте заявку на сайте сервиса или по контактному телефону: +7 (495) 784-84-90.
                </p>
            </div>
        </div>
    </section>

    <section class="container" id="devices-preview">
        <div class="col-12">
            <p class="preview-text">ПОХОЖИЕ МОДЕЛИ</p>
        </div>
    </section>

    <section class="container" id="devices">
        <div class="col-12" id="wrapper">
            <a href="repair-by-device.html" class="col-3" id="device-selection">
                <div class="col-12">
                    <p class="title">
                        РЕМОНТ IPHONE 12 PRO
                    </p>
                </div>
                <div class="col-12" id="image">
                    <div class="circle-bg"></div>
                    <div class="image"><img src="img/iPhone 12 Pro Max-min.png" alt="" class="image-source-brand"></div>
                </div>
                <div class="col-12" id="device-info">
                    <div class="col-6" id="price">
                        <span class="device-price">
                            <small>
                                от 1000
                            </small>
                        </span>
                    </div>
                    <div class="col-5" id="get-more-info">
                        <button class="btn-more">
                            Подробнее
                        </button>
                    </div>
                </div>
            </a>
            <a href="repair-by-device.html" class="col-3" id="device-selection">
                <div class="col-12">
                    <p class="title">
                        РЕМОНТ IPHONE 12 PRO
                    </p>
                </div>
                <div class="col-12" id="image">
                    <div class="circle-bg"></div>
                    <div class="image"><img src="img/iPhone 12 Pro Max-min.png" alt="" class="image-source-brand"></div>
                </div>
                <div class="col-12" id="device-info">
                    <div class="col-6" id="price">
                        <span class="device-price">
                            <small>
                                от 1000
                            </small>
                        </span>
                    </div>
                    <div class="col-5" id="get-more-info">
                        <button class="btn-more">
                            Подробнее
                        </button>
                    </div>
                </div>
            </a>
            <a href="repair-by-device.html" class="col-3" id="device-selection">
                <div class="col-12">
                    <p class="title">
                        РЕМОНТ IPHONE 12 PRO
                    </p>
                </div>
                <div class="col-12" id="image">
                    <div class="circle-bg"></div>
                    <div class="image"><img src="img/iPhone 12 Pro Max-min.png" alt="" class="image-source-brand"></div>
                </div>
                <div class="col-12" id="device-info">
                    <div class="col-6" id="price">
                        <span class="device-price">
                            <small>
                                от 1000
                            </small>
                        </span>
                    </div>
                    <div class="col-5" id="get-more-info">
                        <button class="btn-more">
                            Подробнее
                        </button>
                    </div>
                </div>
            </a>
        </div>
    </section>

    <?php 
        require 'parts/callback-form.php';
        require 'parts/repair-process.php';
        require 'parts/accessories-slider.php';
        require 'parts/clients-reviews-slider.php';
        
        $contactsTitle = 'КОНТАКТЫ СЕРВИСНОГО ЦЕНТРА';
        require 'parts/service-contacts.php';
        require 'parts/footer.php';
    ?>
    