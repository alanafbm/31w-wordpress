<?php
 /**
  * Template header
  * Ve template est intégré dans tous les modèles de thème
  * @link : https://developer.wordpress.org/themes/
  * @package : 31w
  */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>  >
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
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
        <section class="site__sidebar">
            <!--<h3>Sitebar</h3>-->
            <input type="checkbox" name="chk-burger" id="chk-burger">
            <label for="chk-burger" id="burger">
              <img class="menu__burger"src="https://s2.svgbox.net/materialui.svg?ic=menu&color=000" width="32" height="32">
            </label>
             <?php wp_nav_menu(array(
                        'menu' => '',
                        'menu' => 'menu sidebar',
                        'container' => 'nav',
                        'container_class' => 'menu__sidebar',
                        'menu_class' => 'menu__sidebar__ul'
            )); ?>
        </section>
