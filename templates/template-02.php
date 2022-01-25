<?php get_header();/*
        Template Name: Template 02
    */?>

    <main class="siteMain">
                <div class="pageTitle">
                    <h2 class="pageTitle__text"><?php the_field( 'chamada_header' ); ?>

                        
                    </h2>
                </div>

                <div class="template2">
                <?php if ( have_rows( 'bloco_repeater' ) ) : ?>
                    <?php while ( have_rows( 'bloco_repeater' ) ) : the_row(); ?>
                        
                            <div class="template2__item">
                                <div class="template2__item__img">
                                    <div class="template2__item__index">0<?php echo get_row_index(); ?></div>
                                    <?php if ( get_sub_field( 'imagem_destaque_bloco_01' ) ) { ?>
                                        <div class="template2__item__img__wrapper">
                                             <img src="<?php the_sub_field( 'imagem_destaque_bloco_01' ); ?>" />
                                        </div>
                                    <?php } ?>
                                    <?php if ( get_sub_field( 'imagem_destaque_bloco_2_mobile' ) ) { ?>
                                        <div class="template2__item__img__wrapper" style="display: none;">
                                             <img src="<?php the_sub_field( 'imagem_destaque_bloco_2_mobile' ); ?>" />
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="template2__content">
                                    <h3 class="template2__title">
                                        <?php the_sub_field( 'titulo_bloco_01' ); ?>
                                    </h3>
                                    <h4 class="template2__subtitle"><?php the_sub_field( 'sub-titulo_bloco_01' ); ?></h4>
                                    <ul class="template2__list">
                                        <?php if ( have_rows( 'lista_bloco_01' ) ) : ?>
                                            <?php while ( have_rows( 'lista_bloco_01' ) ) : the_row(); ?>
                                                <li><?php the_sub_field( 'item_lista_repeater_repeater_bloco_01' ); ?></li>
                                            <?php endwhile; ?>
                                        <?php else :endif; ?>
                                    </ul>
                                    <p class="template2__title--2">
                                        <strong><?php the_sub_field( 'pre_cta_bloco_01' ); ?></strong>
                                    </p>
                                    <a href="<?php the_sub_field( 'link_cta_bloco_01' ); ?>" target="<?php the_sub_field( 'tipo_cta_bloco_01' ); ?>" id="<?php the_sub_field( 'id_elemento_bloco_01' ); ?>" class="btn"><?php the_sub_field( 'texto_botao_cta_bloco_01' ); ?></a>
                                </div>
                            </div>
                       
                    <?php endwhile; ?>
                <?php else : endif; ?>
                </div>

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