<div
    class="cta--demonstracao lax"
    data-lax-preset=" fadeIn"
    data-lax-anchor="self"
>
    <div class="cta--demonstracao__container">
        <div class="cta--demonstracao__text">
            <?php the_field( 'chamada_box_cta_rodape' ); ?>
        </div>
        <a href="<?php the_field( 'link_cta_bloco_box_cta_rodape' ); ?>" class="btn" target="<?php the_field( 'tipo_cta_bloco_box_cta_rodape' ); ?>" id="<?php the_field( 'id_elemento_bloco_box_cta_rodape' ); ?>"> <?php the_field( 'texto_botao_cta_box_cta_rodape' ); ?> </a>
    </div>
    <?php $imagem_destaque_box_cta_rodape = get_field( 'imagem_destaque_box_cta_rodape' ); ?>
    <?php if ( $imagem_destaque_box_cta_rodape ) { ?>
        <div class="cta--demonstracao__img">
            <img src="<?php echo $imagem_destaque_box_cta_rodape['url']; ?>" alt="<?php echo $imagem_destaque_box_cta_rodape['alt']; ?>" />
        </div>
    <?php } ?>
    
</div>