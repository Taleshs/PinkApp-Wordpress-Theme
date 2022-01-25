<div class="siteFooter__menu">
    <div class="siteFooter__menu__col">




        <?php if ( have_rows( 'blocos_menu_rodape_01', 'option' ) ) : ?>
            <?php while ( have_rows( 'blocos_menu_rodape_01', 'option' ) ) : the_row(); ?>
                    <div>
                        <span class="siteFooter__menu__item">
                            <?php the_sub_field( 'titulo_menu_rodape_01' ); ?>
                            <?php $pagina_rodape_01 = get_sub_field( 'pagina_rodape_01' ); if ( $pagina_rodape_01 ):  ?>
                            <ul>
                                <?php foreach ( $pagina_rodape_01 as $post ): setup_postdata ( $post ); ?>
                                <li>
                                    <a
                                        href="<?php the_permalink(); ?>"
                                        id="<?php
                                            $path = wp_make_link_relative(get_permalink($post));
                                            $path = substr($path, 0, -1);
                                            $path = $path == "" ? "/main" : $path;
                                            $path = str_replace("/", "__", $path);

                                            echo ("footer-menu" . $path); 
                                        ?>"
                                        class="asideNav__menu__item"
                                    >
                                        <?php the_title(); ?>
                                    </a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                            <?php endif; ?>
                        </span>
                    </div>
                    <?php endwhile; ?>
        <?php else : ?>
            <?php // no rows found ?>
        <?php endif; ?>


    </div>

    <div class="siteFooter__menu__col">
        <?php if ( have_rows( 'blocos_menu_rodape_02', 'option' ) ) : ?>
            <?php while ( have_rows( 'blocos_menu_rodape_02', 'option' ) ) : the_row(); ?>
                    <div>
                        <span class="siteFooter__menu__item">
                            <?php the_sub_field( 'titulo_menu_rodape_02' ); ?>
                            
                            <?php $pagina_rodape_02 = get_sub_field( 'pagina_rodape_02' ); if ( $pagina_rodape_02 ):  ?>
                            <ul>
                                <?php foreach ( $pagina_rodape_02 as $post ): setup_postdata ( $post ); ?>
                                <?php if(get_sub_field('pagina_destino')):?>
                                    <li>
                                    <a
                                        href="<?php the_sub_field('link_destino');?>"
                                        id="<?php
                                            $path = wp_make_link_relative(get_permalink($post));
                                            $path = substr($path, 0, -1);
                                            $path = $path == "" ? "/main" : $path;
                                            $path = str_replace("/", "__", $path);

                                            echo ("footer-menu" . $path); 
                                        ?>"
                                        class="asideNav__menu__item"
                                    >
                                    <?php the_sub_field('pagina_destino');?>
                                    </a>
                                </li>
                            <?php else:?>
                                <li>
                                    <a
                                        href="<?php the_permalink(); ?>"
                                        id="<?php
                                            $path = wp_make_link_relative(get_permalink($post));
                                            $path = substr($path, 0, -1);
                                            $path = $path == "" ? "/main" : $path;
                                            $path = str_replace("/", "__", $path);

                                            echo ("footer-menu" . $path); 
                                        ?>"
                                        class="asideNav__menu__item"
                                    >
                                        <?php the_title(); ?>
                                    </a>
                                </li>
                                <?php endif; ?>
                                <?php endforeach; ?>
                            </ul>
                            
                            <?php endif; ?>
                        </span>
                    </div>
                    <?php endwhile; ?>
        <?php else : ?>
            <?php // no rows found ?>
        <?php endif; ?>
    </div>

    <div class="siteFooter__menu__col">
        <div>
            <span class="siteFooter__menu__item">
                Contatos
                <ul>
                    <li>
                        <a
                            href="mailto:contato@pinkapp.com"
                            class="asideNav__menu__item"
                            id="<?php echo ("footer-menu__email"); ?>"
                        >
                            contato@pinkapp.com
                        </a>
                    </li>
                    <li>
                        <a
                            href="https://wa.me/5521983051796"
                            target="_blank"
                            class="btn btn--whatsapp"
                            id="<?php echo ("footer-menu__wpp"); ?>"
                        >
                            Whatsapp
                        </a>
                    </li>
                </ul>
            </span>
        </div>
    </div>
</div>

<div class="whatsapp-flutuante">
    <div class="container-btn">
    <span></span>
        <a href="#" class="btn whatsapp-f">whatsapp</a> 
    <span></span>
        </div>
</div>

<style>
.whatsapp-flutuante {
    position: fixed;
    right: 0;
    bottom: 0;
    width: 120px;
    height: 120px;
    text-align: center;
    display:none;

}
.container-btn {
    position: relative;
}
.whatsapp-flutuante .btn {
    padding: 0;
    font-size: 0;
    border-radius: 100%;
    width: 70px;
    height: 70px;
    z-index: 2;
    margin: 0px!important;
    left: 0;
    bottom: 0;
    position: relative;
    background: #34C759;
    line-height: 70px;
    display:block;
    cursor: pointer;
}

.whatsapp-flutuante span:first-child {
    width: 70px;
    height: 70px;
    background: green;
    display: block;
    position: absolute;
    left: 0;
    bottom: 0;
    z-index: -1;
    border-radius: 100%;
    background: rgb(52 199 89 / 40%);
    -moz-transform: scale(1.2);
    -webkit-transform: scale(1.2);
    -o-transform: scale(1.2);
    -ms-transform: scale(1.2);
    transform: scale(1.2);
    animation-name: color;
    animation-duration: 2s;
    animation-iteration-count: infinite;
}

.whatsapp-flutuante span:last-child {
    width: 70px;
    height: 70px;
    display: block;
    position: absolute;
    z-index: -1;
    border-radius: 100%;
    background: rgb(52 199 89 / 45%);
    bottom: 0px;
    left: 0px;
    -moz-transform: scale(1.5);
    -webkit-transform: scale(1.5);
    -o-transform: scale(1.5);
    -ms-transform: scale(1.5);
    transform: scale(1.5);
    animation-name: color2;
    animation-duration: 2s;
    animation-iteration-count: infinite;

}
.whatsapp-f::before,
.btn.btn--whatsapp::before {
	content: "";
	display: block;
	width: 25px;
	height: 25px;
	background-size: contain;
	background-position: center;
	display: inline-block;
	vertical-align: middle;
	position: relative;
	top: -1px;
	margin-right: 3px;
	background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='19.961' height='19.959' viewBox='0 0 19.961 19.959'%3E%3Cg id='Group_1993' data-name='Group 1993' transform='translate(0.396 0.25)'%3E%3Cpath id='Path_505' data-name='Path 505' d='M9029.461,3037.863a7.948,7.948,0,0,1-4.386-1.31l-3.064.976,1-2.938a7.836,7.836,0,0,1-1.52-4.64,7.444,7.444,0,0,1,.039-.768,7.977,7.977,0,0,1,15.882.151c.018.206.025.409.025.618a7.951,7.951,0,0,1-7.974,7.912Zm9.48-8.152a9.485,9.485,0,0,0-18.953-.172c-.006.137-.009.274-.009.412a9.329,9.329,0,0,0,1.359,4.861l-1.71,5.048,5.252-1.669a9.493,9.493,0,0,0,14.063-8.24c0-.079,0-.159,0-.24Z' transform='translate(-9019.629 -3020.539)' fill='%23fff' stroke='%23fff' stroke-width='0.5' fill-rule='evenodd'/%3E%3Cpath id='Path_506' data-name='Path 506' d='M9041.731,3039.632c-.234-.115-1.376-.675-1.592-.75s-.367-.116-.521.115-.6.75-.738.9-.27.173-.506.058a6.307,6.307,0,0,1-1.87-1.145,6.83,6.83,0,0,1-1.288-1.594c-.135-.231-.016-.355.1-.471s.231-.271.353-.4c.032-.04.057-.075.081-.11a2.252,2.252,0,0,0,.151-.276.423.423,0,0,0-.021-.4c-.059-.115-.521-1.252-.72-1.714s-.385-.382-.521-.382-.29-.022-.445-.022a.857.857,0,0,0-.62.289,2.571,2.571,0,0,0-.814,1.927,3,3,0,0,0,.119.786,5.332,5.332,0,0,0,.83,1.6,9.579,9.579,0,0,0,3.971,3.486c2.365.918,2.365.612,2.792.572a2.322,2.322,0,0,0,1.569-1.1,1.907,1.907,0,0,0,.135-1.1c-.059-.093-.213-.151-.442-.266Z' transform='translate(-9027.551 -3028.32)' fill='%23fff' stroke='%23fff' stroke-width='0.5' fill-rule='evenodd'/%3E%3C/g%3E%3C/svg%3E%0A")
}
/* @keyframes color {
    0% {
    background-color: #fff;
  }
  50% {
    background-color: #34C759;
  }
  100 {
    background-color: #fff;
  }
}
@keyframes color2 {
    0% {
    background-color: #fff;
  }
  50% {
    background-color: #34C759;
  }
  100 {
    background-color: #fff;
  }
} */
</style>