<?php 
    /**
     * Content Template
     * 
     * @package Aquila
     */


?>

<article id="post-<?php the_ID(); ?>" <?php post_class('mb-5'); ?>>
    <?php 
        get_template_part( 'template-parts/components/blog/entry-header' );
        get_template_part( 'template-parts/components/blog/entry-meta' );
        get_template_part( 'template-parts/components/blog/entry-content' );
        get_template_part( 'template-parts/components/blog/entry-footer' );
    ?>
</article>

<!-- <h3><?php //the_title(); ?></h3>
<h6><?php //the_excerpt(); ?></h6> -->