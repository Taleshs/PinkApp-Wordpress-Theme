<?php get_header();
	/*
        Template Name: Template 04
    */
?>
   	<main class="siteMain">
	    <div class="pageTitle">
	        <h2 class="pageTitle__text"><?php the_field( 'chamada_header' ); ?></h2>
	    </div>
	    <div class="pageHeading">
	        <h3 class="pageHeading__paragraph" style="max-width: 720px">
	            <?php the_content();?>
	        </h3>
	    </div>
	    <div class="priceTable__container">
	    	<div class="priceTable__title priceTable__title__header">  
                <?php if ( have_rows( 'tabela_esquerda' ) ) : ?>
					<?php while ( have_rows( 'tabela_esquerda' ) ) : the_row(); ?>
	        			<div class="th">
	        				<?php the_sub_field( 'cabecalho_tabela_esquerda' ); ?>	
	    				</div>
            		<?php endwhile; ?>
				<?php endif; ?>
               <?php if ( have_rows( 'tabela_direita' ) ) : ?>
					<?php while ( have_rows( 'tabela_direita' ) ) : the_row(); ?>
	                	<div class="th ">
	                    	<?php the_sub_field( 'cabecalho_tabela_direita' ); ?>
	                	</div>
	                <?php endwhile; ?>
				<?php endif; ?>
            </div>
	        <table class="priceTable">
	            <tr>
	                <td colspan="2" class="priceTable__cell--descontos">
	                    <?php the_field( 'linha_de_desconto' ); ?>
	                </td>
	            </tr>
	            <tr>
	            	<?php if ( have_rows( 'tabela_esquerda' ) ) : ?>
						<?php while ( have_rows( 'tabela_esquerda' ) ) : the_row(); ?>
	                		<td><?php the_sub_field( 'publico_alvo_esquerda' ); ?></td>
                		<?php endwhile; ?>
					<?php endif; ?>

					<?php if ( have_rows( 'tabela_direita' ) ) : ?>
						<?php while ( have_rows( 'tabela_direita' ) ) : the_row(); ?>
		                <td>
		                    <?php the_sub_field( 'publico_alvo_direita' ); ?>
		                </td>
		                <?php endwhile; ?>
					<?php endif; ?>
	            </tr>
	            <tr>
	                <td class="priceTable__prices">
	                	<?php if ( have_rows( 'tabela_esquerda' ) ) : ?>
							<?php while ( have_rows( 'tabela_esquerda' ) ) : the_row(); ?>
								<?php if ( have_rows( 'valor_e_descricao_repeater_esquerda' ) ) : ?>
									<?php while ( have_rows( 'valor_e_descricao_repeater_esquerda' ) ) : the_row(); ?>
										<?php if(get_sub_field('selo_tabela_esquerda_esquerda')):?>
											<div class="priceTable__prices__selo">
				                                <?php the_sub_field( 'selo_tabela_esquerda_esquerda' ); ?>
				                            </div>
				                        <?php endif;?>
				                        <?php if(get_sub_field('descricao_pre-valor_esquerda')):?>
					                        <div class="priceTable__prices__label">
						                        <?php the_sub_field( 'descricao_pre-valor_esquerda' ); ?>
						                    </div>
					                    <?php endif;?>
										<div class="priceTable__prices__value">
					                       <?php the_sub_field( 'valor_item_esquerda' ); ?>
					                    </div>
					                    <div class="priceTable__prices__label">
					                        <?php the_sub_field( 'descricao_esquerda' ); ?>
					                    </div>
									<?php endwhile; ?>
								<?php else : ?>
									<?php // no rows found ?>
								<?php endif; ?>
							<?php endwhile; ?>
						<?php endif; ?>
	                </td>
	                <td class="priceTable__prices">
	                    <?php if ( have_rows( 'tabela_direita' ) ) : ?>
							<?php while ( have_rows( 'tabela_direita' ) ) : the_row(); ?>
								<?php if ( have_rows( 'valor_e_descricao_repeater_direita' ) ) : ?>
									<?php while ( have_rows( 'valor_e_descricao_repeater_direita' ) ) : the_row(); ?>
										<?php if(get_sub_field('selo_tabela_direita')):?>
											<div class="priceTable__prices__selo">
				                                <?php the_sub_field( 'selo_tabela_direita' ); ?>
				                            </div>
				                        <?php endif;?>
				                        <?php if(get_sub_field('descricao_pre-valor_direita')):?>
					                        <div class="priceTable__prices__label">
						                        <?php the_sub_field( 'descricao_pre-valor_direita' ); ?>
						                    </div>
					                    <?php endif;?>
										<div class="priceTable__prices__value">
					                       <?php the_sub_field( 'valor_item_direita' ); ?>
					                    </div>
					                    <div class="priceTable__prices__label">
					                        <?php the_sub_field( 'descricao_direita' ); ?>
					                    </div>
									<?php endwhile; ?>
								<?php else : ?>
									<?php // no rows found ?>
								<?php endif; ?>
							<?php endwhile; ?>
						<?php endif; ?>
	                </td>
	            </tr>

	            <tr class="priceTable__cell--usuariosGratuitos">
	            	<?php if ( have_rows( 'tabela_esquerda' ) ) : ?>
						<?php while ( have_rows( 'tabela_esquerda' ) ) : the_row(); ?>
							<td><?php the_sub_field( 'linha_de_beneficios_item_esquerda' ); ?></td>
						<?php endwhile; ?>
					<?php endif; ?>

	                <?php if ( have_rows( 'tabela_direita' ) ) : ?>
						<?php while ( have_rows( 'tabela_direita' ) ) : the_row(); ?>
							<td><?php the_sub_field( 'linha_de_beneficios_item_direita' ); ?></td>
						<?php endwhile; ?>
					<?php endif; ?>
	            </tr>

	            <tr class="priceTable__cell--recursos">
	                <td>

	                    <h3 class="priceTable__cell--recursos__title">
	                        Principais recursos
	                    </h3>

	                    <ul class="priceTable__cell--recursos__list">
	                        <?php if ( have_rows( 'tabela_esquerda' ) ) : ?>
							<?php while ( have_rows( 'tabela_esquerda' ) ) : the_row(); ?>
		                		<?php if ( have_rows( 'principais_recursos_esquerda' ) ) : ?>
									<?php while ( have_rows( 'principais_recursos_esquerda' ) ) : the_row(); ?>
										<li><?php the_sub_field( 'recurso_repeater_item' ); ?></li>
									<?php endwhile; ?>
									<?php else : ?>
									<?php ?>
								<?php endif; ?>
	                		<?php endwhile; ?>
						<?php endif; ?>
	                    </ul>
	                </td>
	                <td>
	                    <h3 class="priceTable__cell--recursos__title">
	                        Principais recursos
	                    </h3>
	                    <ul class="priceTable__cell--recursos__list">
	                       <?php if ( have_rows( 'tabela_direita' ) ) : ?>
							<?php while ( have_rows( 'tabela_direita' ) ) : the_row(); ?>
		                		<?php if ( have_rows( 'principais_recursos_direita' ) ) : ?>
									<?php while ( have_rows( 'principais_recursos_direita' ) ) : the_row(); ?>
										<li><?php the_sub_field( 'recurso_repeater_item_direita' ); ?></li>
									<?php endwhile; ?>
									<?php else : ?>
									<?php ?>
								<?php endif; ?>
	                		<?php endwhile; ?>
						<?php endif; ?>
	                    </ul>
	                </td>
	            </tr>

            		<?php if ( have_rows( 'possibilidades_repeater' ) ) : ?>
						<?php while ( have_rows( 'possibilidades_repeater' ) ) : the_row(); ?>
							<tr>
							<?php if ( have_rows( 'possibilidades_linha_repeater' ) ) : ?>
								<?php while ( have_rows( 'possibilidades_linha_repeater' ) ) : the_row(); ?>
									<?php if ( get_sub_field( 'destaque_possibilidade' ) == 1 ) :?>
										<td>
											<div class="priceTable__cell--recursos">
												<ul>
									 				<li><?php the_sub_field( 'possibilidade_item_repeater' ); ?></li>
									 			</ul>
									 		</div>
									 	</td>
									<?php else: ?>  
									 	<td><?php the_sub_field( 'possibilidade_item_repeater' ); ?></td>
									<?php endif;?>
								<?php endwhile; ?>
							<?php else : ?>
								<?php // no rows found ?>
							<?php endif; ?>
							</tr>
						<?php endwhile; ?>
					<?php else : ?>
						<?php // no rows found ?>
					<?php endif; ?>
	        </table>


	        <div class="priceTable__title priceTable__title__header priceTable__title__header--footer"> 
	            <?php if ( have_rows( 'tabela_esquerda' ) ) : ?>
					<?php while ( have_rows( 'tabela_esquerda' ) ) : the_row(); ?>
	               <div class="td">
	                    <a href="<?php the_sub_field( 'link_cta_especialista_item_esquerda' ); ?>" target="<?php the_sub_field( 'tipo_cta_bloco_repeater_item_esquerda' ); ?>" id="<?php the_sub_field( 'id_elemento_bloco_repeater_item_esquerda' ); ?>" class="btn"
	                        ><?php the_sub_field( 'texto_cta_especialista_item_esquerda' ); ?></a
	                    >
	                </div>
	                <?php endwhile; ?>
				<?php endif; ?>

	            <?php if ( have_rows( 'tabela_direita' ) ) : ?>
					<?php while ( have_rows( 'tabela_direita' ) ) : the_row(); ?>
	                <div class="td">
	                    <a href="<?php the_sub_field( 'link_cta_especialista_item_direita' ); ?>" target="<?php the_sub_field( 'tipo_cta_bloco_repeater_item_direita' ); ?>" id="<?php the_sub_field( 'id_elemento_bloco_repeater_item_direita' ); ?>" class="btn "
	                        ><?php the_sub_field( 'texto_cta_especialista_item_direita' ); ?></a
	                    >
	                </div>
	                <?php endwhile; ?>
				<?php endif; ?>
	        </div>



	                            <!-- mobile -->
             <div class="priceTable__mobileContainer">


                    <?php if ( have_rows( 'tabela_esquerda' ) ) : ?>
					    <?php while ( have_rows( 'tabela_esquerda' ) ) : the_row(); ?>
					        <div class="priceTable priceTable--mobile">
					            <div class="td priceTable__title">
					                <h3><?php the_sub_field( 'cabecalho_tabela_esquerda' ); ?></h3>
					            </div>
					            <div class="priceTable__cell--descontos td">
					                <h4 class="cell"><?php the_field( 'linha_de_desconto' ); ?></h4>
					            </div>
					            <div class="td">
					                <?php the_sub_field( 'publico_alvo_esquerda' ); ?>
					            </div>

					            <?php if ( have_rows( 'valor_e_descricao_repeater_esquerda' ) ) : ?>
					                <div class="td priceTable__prices">
					                    <?php while ( have_rows( 'valor_e_descricao_repeater_esquerda' ) ) : the_row(); ?>
					                        <?php if(get_sub_field('selo_tabela_esquerda_esquerda')):?>
					                            <div class="priceTable__prices__selo">
					                                <?php the_sub_field( 'selo_tabela_esquerda_esquerda' ); ?>
					                            </div>
					                        <?php endif;?>
					                        <?php if(get_sub_field('descricao_pre-valor_esquerda')):?>
					                            <div class="priceTable__prices__label">
					                                <?php the_sub_field( 'descricao_pre-valor_esquerda' ); ?>
					                            </div>
					                        <?php endif;?>
					                        <div class="priceTable__prices__value">
					                            <?php the_sub_field( 'valor_item_esquerda' ); ?>
					                        </div>
					                        <div class="priceTable__prices__label">
					                            <?php the_sub_field( 'descricao_esquerda' ); ?>
					                        </div>
					                    <?php endwhile; ?>
					                </div>
					            <?php else : ?>
					                <?php // no rows found ?>
					            <?php endif; ?>


					            <?php if ( get_sub_field( 'linha_de_beneficios_item_esquerda' ) ) : ?>
					             	<div class="td priceTable__cell--usuariosGratuitos">
					             	  	<?php the_sub_field( 'linha_de_beneficios_item_esquerda' ); ?>
				            		</div>
				                	<?php else : ?>
				                	<div class="td priceTable__cell--usuariosGratuitos priceTable__cell--usuariosGratuitos--empty">
					             	  	&nbsp;
				            		</div>
				                <?php endif; ?>
					            
					          
					            <div class="priceTable__cell--recursos td">
					                <div class="">  
					                    <h3 class="priceTable__cell--recursos__title">
					                        Principais recursos
					                    </h3>
					                    <ul class="priceTable__cell--recursos__list">
					                        <?php if ( have_rows( 'principais_recursos_esquerda' ) ) : ?>
					                            <?php while ( have_rows( 'principais_recursos_esquerda' ) ) : the_row(); ?>
					                                <li><?php the_sub_field( 'recurso_repeater_item' ); ?></li>
					                            <?php endwhile; ?>
					                        <?php else : ?>
					                            <?php // no rows found ?>
					                        <?php endif; ?>
					                    </ul>
					                </div>
					            </div>
					            <?php if ( have_rows( 'possibilidades_mobile' ) ) : ?>
									<?php while ( have_rows( 'possibilidades_mobile' ) ) : the_row(); ?>
										<div class="td medium">
											<?php if ( get_sub_field( 'destaque_possibilidade_mobile' ) == 1 ) :?>
												<div class="priceTable__cell--recursos">
													<ul>
									                	<li><?php the_sub_field( 'possibilidade_mobile_item' ); ?></li>
									                </ul>
									            </div>
							                <?php else: ?>
												<?php the_sub_field( 'possibilidade_mobile_item' ); ?>
							                <?php endif; ?>
							            </div>
									<?php endwhile; ?>
								<?php else : ?>
									<?php // no rows found ?>
								<?php endif; ?>
					            
					            <div class="td">
					                <a href="<?php the_sub_field( 'link_cta_especialista_item_esquerda' ); ?>" class="btn" target="<?php the_sub_field( 'tipo_cta_bloco_repeater_item_esquerda' ); ?>" id="<?php the_sub_field( 'id_elemento_bloco_repeater_item_esquerda' ); ?>"><?php the_sub_field( 'texto_cta_especialista_item_esquerda' ); ?></a>
					            </div>
					        </div>
					    <?php endwhile; ?>
					<?php endif; ?>


                  <?php if ( have_rows( 'tabela_direita' ) ) : ?>
					    <?php while ( have_rows( 'tabela_direita' ) ) : the_row(); ?>
					        <div class="priceTable priceTable--mobile">
					            <div class="td  priceTable__title priceTable--enterprise">
					                <h3><?php the_sub_field( 'cabecalho_tabela_direita' ); ?></h3>
					            </div>
					            <div class="priceTable__cell--descontos td">
					                <h4 class="cell"><?php the_field( 'linha_de_desconto' ); ?></h4>
					            </div>
					            <div class="td">
					                <?php the_sub_field( 'publico_alvo_direita' ); ?>
					            </div>

					            <?php if ( have_rows( 'valor_e_descricao_repeater_direita' ) ) : ?>
					                <div class="td priceTable__prices">
					                    <?php while ( have_rows( 'valor_e_descricao_repeater_direita' ) ) : the_row(); ?>
					                        <?php if(get_sub_field('selo_tabela_direita')):?>
					                            <div class="priceTable__prices__selo">
					                                <?php the_sub_field( 'selo_tabela_direita' ); ?>
					                            </div>
					                        <?php endif;?>
					                        <?php if(get_sub_field('descricao_pre-valor_direita')):?>
					                            <div class="priceTable__prices__label">
					                                <?php the_sub_field( 'descricao_pre-valor_direita' ); ?>
					                            </div>
					                        <?php endif;?>
					                        <div class="priceTable__prices__value">
					                            <?php the_sub_field( 'valor_item_direita' ); ?>
					                        </div>
					                        <div class="priceTable__prices__label">
					                            <?php the_sub_field( 'descricao_direita' ); ?>
					                        </div>
					                    <?php endwhile; ?>
					                </div>
					            <?php else : ?>
					                <?php // no rows found ?>
					            <?php endif; ?>

					            
					            <?php if ( get_sub_field( 'linha_de_beneficios_item_direita' ) ) : ?>
					             	<div class="td priceTable__cell--usuariosGratuitos">
					             	  	<?php the_sub_field( 'linha_de_beneficios_item_direita' ); ?>
				            		</div>
				                	<?php else : ?>
				                	<div class="td priceTable__cell--usuariosGratuitos priceTable__cell--usuariosGratuitos--empty">
					             	  	&nbsp;
				            		</div>
				                <?php endif; ?>
					            

					            <div class="priceTable__cell--recursos td">
					                <div>  
					                    <h3 class="priceTable__cell--recursos__title">
					                        Principais recursos
					                    </h3>
					                    <ul class="priceTable__cell--recursos__list">
					                        <?php if ( have_rows( 'principais_recursos_direita' ) ) : ?>
					                            <?php while ( have_rows( 'principais_recursos_direita' ) ) : the_row(); ?>
					                                <li><?php the_sub_field( 'recurso_repeater_item_direita' ); ?></li>
					                            <?php endwhile; ?>
					                        <?php else : ?>
					                            <?php // no rows found ?>
					                        <?php endif; ?>
					                    </ul>
					                </div>
					            </div>
					            <?php if ( have_rows( 'possibilidades_mobile_direita' ) ) : ?>
									<?php while ( have_rows( 'possibilidades_mobile_direita' ) ) : the_row(); ?>
										<div class="td medium">
											<?php if ( get_sub_field( 'destaque_possibilidade_mobile_direita' ) == 1 ) :?>
												<div class="priceTable__cell--recursos">
													<ul>
									                	<li><?php the_sub_field( 'possibilidade_mobile_item_direita' ); ?></li>
									                </ul>
									            </div>
							                <?php else: ?>
												<?php the_sub_field( 'possibilidade_mobile_item_direita' ); ?>
							                <?php endif; ?>
							            </div>
										
									<?php endwhile; ?>
								<?php else : ?>
									<?php // no rows found ?>
								<?php endif; ?>
					            
					            <div class="td">
					                <a href="<?php the_sub_field( 'link_cta_especialista_item_direita' ); ?>" class="btn " target="<?php the_sub_field( 'tipo_cta_bloco_repeater_item_direita' ); ?>" id="<?php the_sub_field( 'id_elemento_bloco_repeater_item_direita' ); ?>"><?php the_sub_field( 'texto_cta_especialista_item_direita' ); ?></a>
					            </div>
					        </div>
					    <?php endwhile; ?>
					<?php endif; ?>

			</div>
                    <!-- fim mobile -->

	        <div class="priceTable__obs">
	        	<?php the_field( 'obervacoes_repeater' ); ?>
	        </div>
	    </div>

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