        </div> <!-- class="siteBody -->
     

        <?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>

            <?php $modal_padrao = get_field( 'modal_padrao' ); ?>
            <?php if ( $modal_padrao ): ?>
                <?php foreach ( $modal_padrao as $modal ): ?>
                <?php setup_postdata ( $post ); ?> 
                    <div class="modal">
                        <?php $tipo_modal = get_field( 'tipo_do_modal',$modal ); ?>
                            

                        <div class="modal__inner"> 
                            <div class="modal__close"></div>
                            <?php $imagem_modal = get_field( 'imagem_modal',$modal); ?>
                            <?php if ( $imagem_modal ) { ?>
                                <img src="<?php echo $imagem_modal['url']; ?>" alt="" class="modal__img" /> 
                            <?php } ?>
                            <div class="modal__text"> <h3 class="modal__title"> 
                                <?php the_field( 'chamada_modal',$modal); ?>
                                </h3> <p> <?php the_field( 'conteudo_modal',$modal); ?></p> 
                                <btn id="popup__wpp" class="btn btn--whatsapp btn--leading"><?php the_field( 'texto_cta_modal',$modal); ?> </btn> 
                            </div>
                        </div>

                        
                    </div>
                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>

        <?php endwhile; endif; ?>

        <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/lax.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

        <?php wp_footer();?>

    </body>
</html>
