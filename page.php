<?php get_header(); ?>


<section class="container">
    <div class="row">
        <div class="col-12">
            <main>
                <?php
    // WooCommerce পেজ বা প্রোডাক্ট পেজের জন্য কন্টেন্ট দেখান
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_content();
        endwhile;
    else :
        echo '<p>No content found.</p>';
    endif;
    ?>
            </main>
        </div>
    </div>
</section>

<?php get_footer(); ?>