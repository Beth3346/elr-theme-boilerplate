<?php

    $tax_term = elr_get_current_tax( $wp_query );

    if ( post_type_exists( 'product' ) ) {
        $count_posts = wp_count_posts( 'product' );
        $num_posts = $count_posts->publish;
    } else {
        $num_posts = 0;
    }

?>
<?php get_header(); ?>

<main class="main-content">

    <!-- if product archive or product custom taxonomy show grid -->
    <?php if ( is_post_type_archive() || is_tax()  ) : ?>
        <div class="cpt-grid">
            <div class="cpt-grid-nav">
                <h3>Limit Results:</h3>
                <nav class="num-results-nav">
                    <ul>
                        <li><a class="active" href="/products/" data-num="20">20</a></li>
                        <li><a href="/products/" data-num="40">40</a></li>
                        <li><a href="/products/" data-num="-1">All</a></li>
                    </ul>
                </nav>

                <h3>Filter Results:</h3>

                <?php elr_tax_nav( 'brand', $tax_term ); ?>

                <?php elr_tax_nav( 'product_type', $tax_term ); ?>
            </div>
            <div class="cpt-grid-content" data-post-type="product">
                <?php elr_get_loop(); ?>
                <p class="post-count">Showing <?php echo $wp_query->post_count; ?> of <?php echo $num_posts; ?></p>
            </div>            
        </div>

    <!-- if category/tag/author/date archive show normal loop -->
    <?php else : ?>
        <div class="content-holder">
            <?php elr_get_loop(); ?>
        </div>
        <?php get_sidebar(); ?>
    <?php endif; ?>
</main>
<!--Check to see if contact should be displayed -->

<?php elr_get_contact(); ?>
<?php get_footer(); ?>