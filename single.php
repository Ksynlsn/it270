<?php get_header();?>

<div id="hero">
    <img src="<?php echo get_template_directory_uri();?>/images/yellowstone-inner.jpeg" alt="yellowstone">
</div><!--end hero-->

<div id="wrapper">
    <!--THIS SINGLE PAGE WILL REPRESENT OUR SINGLE POST -->
<main>
<?php if(have_posts()) : ?> <!-- if we have posts/pages- show them! -->

<?php while(have_posts()) : the_post() ;?>     <!-- show posts by using while loop -->
<article class="post">
<h2 class="title"> <?php the_title() ;?> </h2>
<div class="meta">
<span><b>Posted By: </b><?php the_author() ;?></span>
<span><b>Posted On: </b><?php the_time('F j, Y g:i a') ;?></span>
</div><!--close meta-->

<?php the_post_thumbnail(400, 400) ;?>

<!-- WE ARE DISPLAYING THE INDIVIDUAL POST CONTENT ON THIS PAGE -->
<?php the_content() ;?>

</article>
<span class="next-previous">
<?php (previous_post_link()) ? '%link' : ''; ?> &nbsp; &nbsp; <?php (next_post_link()) ? '%link' : ''; ?>
</span>
<?php endwhile ;?>

<?php else : ?>
<h2><?php echo wpautop('Sorry, no posts were found!');?></h2>
<?php endif ;?>

<?php comments_template(); ?>
</main>

<?php get_sidebar() ;?>

</div><!--wrapper-->
<?php get_footer();?>