<?php get_header(); ?>

<section class="container">
    <div class="row">
        <div class="col-12">



            <div class="product-page">
                <?php
    // WooCommerce প্রোডাক্ট কনটেন্ট রেন্ডার করা
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            wc_get_template_part( 'content', 'single-product' );
        endwhile;
    else :
        echo '<p>No products found.</p>';
    endif;
    ?>
            </div>

        </div>
    </div>
</section>
<?php get_footer(); ?>