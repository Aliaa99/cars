<?php
    include 'controllers/header.php';
?>

<section class="text-center pages-heading">
    <h1> العروض المميزه</h1><br>
    <h6>
        <a href="index.php">الرئيسيه</a>
        <span>/</span>
        <span>العروض</span>
    </h6>
</section>

<section class="mt-30 mb-60">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php
                    include 'controllers/horizontal-card.php';
                ?>
                <?php
                    include 'controllers/horizontal-card.php';
                ?>
                <?php
                    include 'controllers/horizontal-card.php';
                ?>
            </div>
        </div>
    </div>
</section>

<?php
    include 'controllers/footer.php';
?>