<?php get_header();
/* Template Name: Front Page */
?>
<div id="wrapper">
<?php if(have_posts()) : ?> <!-- if we have posts/pages- show them! -->

<?php while(have_posts()) : the_post() ;?> <!-- show posts by using while loop -->
<!-- WE ARE DISPLAYING THE CONTENT ON THIS PAGE - THE HOME PAGE -->
<?php the_content() ;?>

<?php endwhile ;?>

<?php else : ?>
<h2><?php echo wpautop('Sorry, no posts were found!');?></h2>
<?php endif ;?>

</div><!--wrapper-->
<?php get_footer();?>