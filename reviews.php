    <?php 
        $title = 'Reviews';
        require 'parts/header.php';
    ?>

    <section class="container" id="breadcrumbs">
        <div class="col-lg-12">
            <a href="/" class="breadcrumb-item">Главная</a>
            <span class="active-breadcrumb"> / Отзывы о Сервисном центре</span>
        </div>
    </section>

    <?php 
        require 'parts/clients-reviews-slider.php';
        require 'parts/benefits.php';
        require 'parts/callback-form.php';
        require 'parts/repair-process.php';
        
        $contactsTitle = 'АДРЕСА НАШИХ СЕРВИСНЫХ ЦЕНТРОВ';
        require 'parts/service-contacts.php';
        require 'parts/footer.php';
    ?>  
    