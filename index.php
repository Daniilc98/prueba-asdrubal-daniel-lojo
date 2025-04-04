<?php get_header(); ?>

<main>

    <h1 id="title-dynamic">Título de prueba</h1>

    <?php include 'sections/section1.php'; ?>
    <?php include 'sections/section2.php'; ?>
    
    <?php
        $mostrar = true;
        if ($mostrar) {
            include 'sections/section-conditional.php';
        }
    ?>

</main>

<?php get_footer(); ?>