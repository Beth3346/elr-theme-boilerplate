<?php if(!is_single()) : global $more; $more = 0; endif; //enable more link ?>

<section id="post-<?php the_ID(); ?>" <?php post_class("post clearfix $class"); ?>>
    
    <h1 class="post-title" role="heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

    <p class="post-date"><time datetime="<?php the_time('o-m-d') ?>" pubdate><?php the_time('M j, Y') ?></time></p>

    <div class="post-meta"> 
        <p class="post-author"><?php the_author_posts_link() ?></p>
        <p class="post-category"><?php the_category(', ') ?></p>
        <?php the_tags(' <p class="post-tag">', ', ', '</p>'); ?>
        <?php if ( comments_open() ) : ?>
            <p class="post-comment"><?php comments_popup_link( __( '0 Comments', 'elr' ), __( '1 Comment', 'elr' ), __( '% Comments', 'elr' ) ); ?></p>
        <?php endif; ?>
    </div>

    <!-- if we have a featured image then display it -->
    <?php if ( '' != get_the_post_thumbnail() ) { ?>
        <div class="post-image">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
        </div>
    <?php } ?>

    <div>
        <?php if ( is_single() || is_page() ) { ?>
            <?php the_content(); ?>
        <?php } else { ?>
        <div class="post-excerpt<?php echo $post->ID ?>">
            <?php the_excerpt(); ?>
        </div>
        <?php } ?>
    </div>

    <?php edit_post_link(__('Edit', 'elr'), '[', ']'); ?>
    
</section>