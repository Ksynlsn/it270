<?php get_header();
/* Template Name: Tours Page */
?>

<div id="hero">
    <img src="<?php echo get_template_directory_uri();?>/images/yellowstone-inner.jpeg" alt="yellowstone">
</div><!--end hero-->

<div id="wrapper">
<main>
<?php if(have_posts()) : ?> <!-- if we have posts/pages- show them! -->
<!-- featured image post -->
<?php if(has_post_thumbnail()) : ?>
<?php the_post_thumbnail(400, 400) ;?>
<?php endif ;?>

<?php while(have_posts()) : the_post() ;?> <!-- show posts by using while loop -->
<!-- WE ARE DISPLAYING THE CONTENT ON THIS PAGE - THE HOME PAGE -->
<?php the_content() ;?>

<?php endwhile ;?>

<?php else : ?>
<h2><?php echo wpautop('Sorry, no posts were found!');?></h2>
<?php endif ;?>
</main>

<aside id="secondary" class="widget-area">
    <?php dynamic_sidebar( 'sidebar-tours' ); ?>
    <?php dynamic_sidebar( 'sidebar-tours-specials' ); ?>
</aside><!-- #secondary -->

    <?php dynamic_sidebar( 'sidebar-buy-now' ); ?>

</div><!--wrapper-->
<?php get_footer();?>