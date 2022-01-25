<?php get_header();/*
        Template Name: Template 03
    */?>
        <main class="siteMain">
            <div class="pageTitle">
                <h2 class="pageTitle__text"><?php the_field( 'chamada_header' ); ?></h2>
            </div> 
            <div class="pageHeading">
                <h3 class="pageHeading__paragraph" style="max-width: <?php the_field( 'largura_maxima_do_paragrafo' ); ?>px">
                   <?php the_field('titulo_solucoes');?>
                    </span>
                </h3>

                <a href="<?php the_field( 'link_cta_bloco_front_page' ); ?>" class="btn" targe="<?php the_field( 'tipo_cta_bloco_front_page' ); ?>" id="<?php the_field( 'id_elemento_bloco_front_page' ); ?>"> <?php the_field( 'texto_botao_cta_front_page' ); ?> </a>
            </div> 
            <?php $animacao_front_page = get_field( 'animacao_front_page' ); ?>
                <?php if ( $animacao_front_page ) { ?>
                    <div class="motionContainer">
                        <video autoplay muted playsinline loop>
                            <source src="<?php echo $animacao_front_page['url']; ?>" type="video/mp4" />
                        </video>
                    </div>
                <?php } ?>

            
            <?php if ( have_rows( 'beneficios_repeater_front_page' ) ) : ?>       
            <div
                    class="beneficios"
                    data-lax-anchor="self"
                    data-lax-translate-x_large="(vh/2) 0, vh -200px"
                    data-lax-opacity="(vh/2) 1, vh 0"
                >
                <h3 class="beneficios__title">Benefícios</h3>
                    <div class="beneficios__list">
                        <ul class="beneficios__list__col">
                        <?php while ( have_rows( 'beneficios_repeater_front_page' ) ) : the_row(); ?>
                            <li>
                            <span class="beneficios__list__container">
                                <?php the_sub_field( 'item_beneficios_front_page' ); ?>
                            </span>
                        </li>
                        <?php endwhile; ?>
                    </ul>
                    <ul class="beneficios__list__col">
                        <?php while ( have_rows( 'beneficios_repeater_front_page_02' ) ) : the_row(); ?>
                            <li>
                            <span class="beneficios__list__container">
                                <?php the_sub_field( 'item_beneficios_front_page' ); ?>
                            </span>
                        </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
            </div>
            <?php else : ?>
                <?php // no rows found ?>

            <?php endif; ?>

            <?php $imagem_box_cta = get_field( 'imagem_box_cta' ); ?>
                <?php if ( $imagem_box_cta ) { ?>
            <div
                class="cta--dados"
                style="background-image: url(<?php echo $imagem_box_cta['url']; ?>)"
            >
                <div class="cta--dados__container">
                    <h3 class="cta--dados__title">
                        <?php the_field( 'chamada_principal_box_cta' ); ?>
                    </h3>
                    <p class="cta--dados__text">
                        <?php echo get_field( 'chamada_secundaria_box_cta' ); ?>
                    </p>
                    <a href="#" class="btn"> FALAR COM ESPECIALISTA </a>
                </div>

                <div class="cta--dados__fonte">
                    <?php the_field( 'dados_box_cta' ); ?>
                </div>
            </div>
            <?php } ?>


            <?php get_template_part( 'inc/demonstracao'); ?>

            <div class="siteFooter">
                    <div class="siteFooter__logo">
                        <a href="index.html">
                            <img src="<?php echo get_template_directory_uri();?>/images/logoFull.svg" alt="Pink" />
                        </a>
                    </div>

                    <?php get_template_part('inc/rodape');?>
                </div>
            </main>
<?php get_footer();?>