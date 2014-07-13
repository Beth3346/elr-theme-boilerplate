<?php 
/*
Template Name: Single-Column
*/
?>

<?php get_header(); ?>

<main class="main-content">
	<div class="content-holder article-full">		
        <?php while ( have_posts() ) : the_post(); ?>
        <article>
            <h1 class="page-title"><?php the_title(); ?></h1>

            <?php the_content(); ?>
            
            <?php wp_link_pages(array('before' => '<p><strong>'.__('Pages:','elr').'</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
            
            <?php edit_post_link(__('Edit', 'elr')); ?>
        </article>   
        <?php endwhile; ?>
	</div>
</main>

<?php get_footer(); ?>