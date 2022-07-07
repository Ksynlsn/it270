<?php get_header();?>
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

<!-- WE ARE DISPLAYING THE INDIVIDUAL POST CONTENT ON THIS PAGE -->
<?php the_content() ;?>

</article>
<?php endwhile ;?>

<?php else : ?>
<h2><?php echo wpautop('Sorry, no posts were found!');?></h2>
<?php endif ;?>

<?php comments_template(); ?>

</main>

</div><!--wrapper-->
<?php get_footer();?>