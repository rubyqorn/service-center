    <?php 
        $title = 'Repair';
        require 'parts/header.php';
    ?>

    <section class="container-full-width" id="repair-preview">
        <div class="container" id="wrapper">
            <div class="col-6" id="left-side">
                <div class="col-lg-12" id="breadcrumbs">
                    <a href="/" class="hoverable">Главная</a>
                    <span class="current-page"> / Ремонт телефонов</span>
                </div>
                <div class="col-12" id="title">
                    <p class="title-text">
                        РЕМОНТ ТЕЛЕФОНОВ
                    </p>
                </div>
                <div class="col-9" id="description">
                    <p class="description-text">
                        Сломался телефон? Звоните! Ремонт за 1 час!
                        Диагностика всегда бесплатно. Бесплатная парковка.
                        Гарантия на работу и запчасти. Любые способы оплаты.
                    </p>
                </div>
                <div class="col-12" id="callback">
                    <span>цена от 900 руб.</span>
                    <button class="callback-btn" id="request-form">
                        Оставить заявку
                    </button>
                </div>
            </div>
            <div class="col-5" id="right-side">
                <img src="img/remont-telefonov2-min.png" alt="">
            </div>
        </div>
        <section class="container" id="repair-benefits">
            <div class="col-12">
                <div class="col-4">
                    <div class="benefit-item">
                        <p class="benefit-title">
                            <i class="fas fa-clock"></i>
                            <span class="text">СРОЧНЫЙ РЕМОНТ</span>
                        </p>
                        <div class="benefits-list">
                            <p class="benefits-list-item">- Ремонт за 1 час</p>
                            <p class="benefits-list-item">- Срочная диагностика</p>
                            <p class="benefits-list-item">- Ремонт в Вашем присутсвии</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="benefit-item">
                        <p class="benefit-title">
                            <i class="fas fa-money-bill"></i>
                            <span class="text">ГАРАНТИЯ И КАЧЕСТВО</span>
                        </p>
                        <div class="benefits-list">
                            <p class="benefits-list-item">- Оригинальные детали</p>
                            <p class="benefits-list-item">- Гарантия 100 дней</p>
                            <p class="benefits-list-item">- Оплата по факту</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="benefit-item">
                        <p class="benefit-title">
                            <i class="far fa-credit-card"></i>
                            <span class="text">СПОСОБЫ ОПЛАТЫ</span>
                        </p>
                        <div class="benefits-list">
                            <p class="benefits-list-item">- Оплата картой</p>
                            <p class="benefits-list-item">- Оплата через банк</p>
                            <p class="benefits-list-item">- Рассрочка и кредит</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="benefit-item">
                        <p class="benefit-title">
                            <i class="fas fa-parking"></i>
                            <span class="text">МЕТРО И ПАРКОВКА</span>
                        </p>
                        <div class="benefits-list">
                            <p class="benefits-list-item">- 2 минуты от метро</p>
                            <p class="benefits-list-item">- Парковка бесплатно</p>
                            <p class="benefits-list-item">- Курьерская служба</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <?php 
        $tableTitle = 'ЦЕНЫ НА РЕМОНТ ТЕЛЕФОНОВ';
        $hint = '(БЕЗ УЧЕТА ЗАПЧАСТЕЙ)';

        $marginUnderAbsoluteBlock = true;
        require 'parts/price-table.php';
    ?>

    <section id="repair-description" class="container">
        <div class="col-12" id="wrapper">
            <div class="col-12" id="preview-text">
                <p class="title-text">
                    Сломался телефон? Звоните и мы предложим, самые профессиональные и не дорогие услуги по ремонту телефонов в Москве (район Марьино, метро Братиславская). Нужно сказать, что этот процесс сложный и трудоемкий. Без опыта, глубоких знаний, наличия специализированных инструментов и оборудования не обойтись. Поэтому мы настоятельно вам не рекомендуем пытаться починить смартфон самостоятельно. Доверьтесь профессионалам!
                </p>
            </div>
            <div class="col-12" id="about-service-description">
                <div class="col-12" id="title">
                    <p class="title-text">
                        Какой ремонт телефонов мы предлагаем:
                    </p>
                </div>
                <div class="col-12" id="list">
                    <ul>
                        <li>Модульный ремонт: восстановление после механических повреждений;</li>
                        <li>Компонентный ремонт: восстановление после попадания жидкости;</li>
                        <li>Последствия не квалифицированного ремонта и многое другое;</li>
                        <li>Ремонт любой сложности.</li>
                    </ul>
                </div>
                <div class="col-12" id="title">
                    <p class="title-text">
                        Как мы работаем?
                    </p>
                </div>
                <div class="col-12" id="list">
                    <ul>
                        <li>Сделаем бесплатную диагностику и согласуем стоимость ремонта телефона;</li>
                        <li>Заменим или отремонтируем неисправные детали;</li>
                        <li>Протестируем смартфон на работоспособность и предоставим гарантию.</li>
                    </ul>
                </div>
                <div class="col-12" id="title">
                    <p class="title-text">
                        Наши преимущества
                    </p>
                </div>
                <div class="col-12" id="list">
                    <ul>
                        <li>Предоставляем бесплатную и срочную диагностику телефонов;</li>
                        <li>Выполняем ремонт в вашем присутствии или в день обращения;</li>
                        <li>Даем гарантию на все виды работ и запчасти;</li>
                        <li>Предлагаем удобные способы оплаты: от наличных до рассрочки в банке;</li>
                        <li>Есть курьерская служба доставки техники в сервисный центр и обратно;</li>
                        <li>Ремонтируем рядом с метро, есть бесплатная парковка;</li>
                        <li>Работаем с физическими и юридическими лицами. Выдаем полный пакет документов на обслуживание в сервисном центре.</li>
                    </ul>
                </div>
            </div>
            <div class="col-12" id="about-service-text">
                <p class="service-text">
                    В сервисном центре «Ремонт Марьино» работают только квалифицированные специалисты с опытом работы более 10 лет. Быстро, качественно, вежливо, недорого!
                </p>
            </div>
        </div>
    </section>

    <?php 
        require 'parts/callback-form.php';
        require 'parts/repair-process.php';
        require 'parts/accessories-slider.php';
        require 'parts/clients-reviews-slider.php';
        require 'parts/service-contacts.php';
        require 'parts/footer.php';
    ?>
    