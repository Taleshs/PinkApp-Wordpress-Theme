<!DOCTYPE html>
<html lang="pt-BR">
    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta charset="UTF-8" />
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
        <link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/images/favicon.png" />
     
        <?php wp_head();?>

    </head>

    <body>
        <div id="siteBody" class="siteBody">
            <div class="call-menu"></div>
            <div class="asideNav">
                <header class="asideNav__header">
                    <a href="<?php echo get_site_url(); ?>">
                        <h1>
                            <img src="<?php echo get_template_directory_uri();?>/images/logoFull.svg" alt="Pink" />
                        </h1>
                    </a>
                    <div class="call-menu"></div>
                </header>
                <nav class="asideNav__menu">
                    <div class="asideNav__header">
                        <a href="<?php echo get_site_url(); ?>">
                            <h1>
                                <img src="<?php echo get_template_directory_uri();?>/images/logoFull.svg" alt="Pink" />
                            </h1>
                        </a>
                    </div>
                    <ul class="asideNav__menu__inner">

                        <?php if ( have_rows( 'blocos_menu', 'option' ) ) : ?>
                            <?php while ( have_rows( 'blocos_menu', 'option' ) ) : the_row(); ?>

                                <li class="asideNav__menu__section">

                                    <h3 class="asideNav__menu__title">
                                        <?php the_sub_field( 'titulo_menu_lateral' ); ?>
                                    </h3>
                                   <?php $pagina = get_sub_field( 'pagina' ); if ( $pagina ): ?>
                                    <ul>
                                        <?php foreach ( $pagina as $p ): ?>
                                        <li>
                                            <a
                                                href="<?php echo get_permalink( $p ); ?>"

                                                id="<?php
                                                
                                                        $path = wp_make_link_relative(get_permalink( $p ));
                                                        $path = substr($path, 0, -1);
                                                        $path = $path == "" ? "/main" : $path;
                                                        $path = str_replace("/", "__", $path);

                                                        echo ("side-menu" . $path); 
                                                    ?>"
                                                class="asideNav__menu__item"
                                            >
                                                <?php echo get_the_title( $p ); ?>
                                            </a>
                                        </li>
                                        <?php endforeach; ?>
                                        <?php endif; ?>
                                        </ul>
                                    <?php endwhile; ?>
                                    <?php else : ?>
                                <?php // no rows found ?>
                            <?php endif; ?>

                    </ul>
                </nav>
            </div>