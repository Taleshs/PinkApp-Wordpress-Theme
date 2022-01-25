<?php get_header();/*
        Template Name: Template text
    */?>
    <style>
        .pageHeading.template-text {
    text-align: left;
    padding: 2em 4em;
    max-width: 800px;
}

.pageHeading.template-text p {
    padding-bottom: 1em;
}
</style>
   	<main class="siteMain template-text">
	    <div class="pageTitle">
	        <h2 class="pageTitle__text"><?php the_title();?></h2>
	    </div>
	    <div class="pageHeading template-text">
	        <h3 class="pageHeading__paragraph" style="max-width: 720px">
	            <?php the_content();?>
	        </h3>
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