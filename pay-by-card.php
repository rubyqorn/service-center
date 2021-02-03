    <?php
        $title = 'Pay by card';
        require 'parts/header.php'; 
    ?>

    <section class="container" id="breadcrumbs">
        <div class="col-lg-12">
            <a href="/" class="breadcrumb-item">Главная</a>
            <span class="active-breadcrumb"> / Оплата картой</span>
        </div>
    </section>

    <section class="container" id="pay-by-card">
        <div class="col-lg-12">
            <div class="col-lg-12" id="title">
                <p class="title-text">ОПЛАТА УСЛУГ БАНКОВСКОЙ КАРТОЙ</p>
                <p class="description-text">ЛЕГКО И УДОБНО - ОНЛАЙН</p>
            </div>
            <div class="col-lg-12" id="pay-with-sber">
                <div class="col-lg-3">
                    <img src="img/sbrf.png" alt="">
                </div>
                <div class="col-lg-9" id="description">
                    <p class="description-text">
                        Для выбора оплаты товара с помощью банковской карты на соответствующей странице необходимо нажать кнопку «Оплата заказа банковской картой».
                    </p>
                    <p class="description-sub-text">
                        Оплата происходит через ПАО СБЕРБАНК с использованием Банковских карт следующих платежных систем:
                    </p>
                </div>
            </div>
            <div class="row justify-content-between" id="cards-list">
                <div class="col-lg-4"><img src="img/karty-mir.jpg" alt=""></div>
                <span class="vertical-line"></span>
                <div class="col-lg-4"><img src="img/karty-visa.jpg" alt=""></div>
                <span class="vertical-line"></span>
                <div class="col-lg-4"><img src="img/karty-mstercard.jpg" alt=""></div>
            </div>
            <div class="col-lg-12" id="delivery-process">
                <p class="title-text">ОПИСАНИЕ ПРОЦЕССА ПЕРЕДАЧИ ДАННЫХ</p>
                <p class="description-text">
                    Для оплаты (ввода реквизитов Вашей карты) Вы будете перенаправлены на платежный шлюз ПАО СБЕРБАНК. Соединение с платежным шлюзом и передача информации осуществляется в защищенном режиме с использованием протокола шифрования SSL. В случае если Ваш банк поддерживает технологию безопасного проведения интернет-платежей Verified By Visa или MasterCard SecureCode для проведения платежа также может потребоваться ввод специального пароля. Настоящий сайт поддерживает 256-битное шифрование.
                </p>
                <div class="col-lg-12">
                    <img src="img/dannye.jpg" alt="">
                </div>
                <div class="col-lg-12">
                    <p class="data-description">
                        Конфиденциальность сообщаемой персональной информации обеспечивается ПАО СБЕРБАНК. Введенная информация не будет предоставлена третьим лицам за исключением случаев, предусмотренных законодательством РФ. Проведение платежей по банковским картам осуществляется в строгом соответствии с требованиями платежных систем МИР, Visa Int. и MasterCard Europe Sprl.
                    </p>
                    <p class="data-sub-description">
                        Возврат переведенных средств, производится на Ваш банковский счет в течение 5—30 рабочих дней (срок зависит от Банка, который выдал Вашу банковскую карту).
                    </p>
                </div>
                <div class="col-lg-12" id="pay">
                    <button class="pay-btn">Оплатить</button>
                </div>
            </div>
            
        </div>
    </section>
    
    <?php require 'parts/footer.php'; ?>