    <?php 
        $title = 'Contacts';
        require 'parts/header.php'
    ?>
    <section class="container" id="breadcrumbs">
        <div class="col-lg-12">
            <a href="/" class="breadcrumb-item">Главная</a>
            <span class="active-breadcrumb"> / Контакты</span>
        </div>
    </section>

    <?php 
        $contactsTitle = '<b>КОНТАКТЫ СЕРВИСНОГО ЦЕНТРА "РЕМОНТ-МАРЬИНО"</b>';
        require 'parts/service-contacts.php'; 
        require 'parts/benefits.php';
    ?>

    <section id="path-video-guide" class="container">
        <div class="col-lg-12">
            <iframe width="100%" height="400" src="https://www.youtube.com/embed/twj4ZbiKKwY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </section>

    <?php 
        require 'parts/gallery.php';
        require 'parts/callback-form.php';
        require 'parts/repair-process.php';
        require 'parts/footer.php';
    ?>
