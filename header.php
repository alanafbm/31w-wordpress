<?php
    /**
     * Template header
     * Template integré dans tous les modeles de thème
     * @link : https://developer.wordpress.org/themes
     * @package : 31w
     */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>
<body>
    <section class="site">
        <header class="site__header">
            <section class="site__branding">
                <h1>
                    <a href="<?= esc_url( home_url( '/' ) ) ?>"><?= bloginfo( 'name' ); ?></a>
                </h1>
                <h2>
                <?= bloginfo( 'description' ); ?>
                </h2>
            </section>
        </header>
