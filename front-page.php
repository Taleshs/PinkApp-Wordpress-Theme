<?php get_header();?>

            <main class="siteMain">
                <div class="pageTitle">
                    <h2 class="pageTitle__text"><?php the_field( 'chamada_header' ); ?></h2>
                </div>
                <div class="pageHeading" style="max-width:<?php the_field( 'largura_maxima_do_paragrafo_front' ); ?>px">
                    <h3 class="pageHeading__title">
                        <?php the_field( 'titulo_front_page' ); ?>
                    </h3>
                    <div class="pageHeading__text">
                        <p><?php the_field( 'subtitulo_h2_front_page' ); ?></p>
                    </div>

                    <a href="<?php the_field( 'link_cta_bloco_front_page' ); ?>" class="btn" targe="<?php the_field( 'tipo_cta_bloco_front_page' ); ?>" id="<?php the_field( 'id_elemento_bloco_front_page' ); ?>"> <?php the_field( 'texto_botao_cta_front_page' ); ?> </a>
                    <a href="<?php the_field( 'link_cta_bloco_front_page_D' ); ?>" class="btn white" targe="<?php the_field( 'tipo_cta_bloco_front_page_D' ); ?>" id="<?php the_field( 'id_elemento_bloco_front_page_D' ); ?>"> <?php the_field( 'texto_botao_cta_front_page_D' ); ?> </a>
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
                        <div class="cta--dados__text">
                            <?php echo get_field( 'chamada_secundaria_box_cta' ); ?>
                        </div>
                        <a href="#" class="btn wide"> FALAR COM ESPECIALISTA </a>
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
        </div>
<?php get_footer();?>