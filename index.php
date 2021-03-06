<?php get_header();?>
<!-- index.php is assigned to the blog page in WP -->

<div id="hero">
    <img src="<?php echo get_template_directory_uri();?>/images/yellowstone-inner.jpeg" alt="yellowstone">
</div><!--end hero-->

<div id="wrapper">
    <!--THIS IS THE WP BLOG PAGE; A CONTAINER FOR ALL MY POSTS -->
<main>
<?php if(have_posts()) : ?> <!-- if we have posts/pages- show them! -->
<?php while(have_posts()) : the_post() ;?>     <!-- show posts by using while loop -->
<article class="post">
<h2 class="title"><a href="<?php the_permalink() ;?>"><?php the_title() ;?></a></h2>

<div class="meta">
<span><b>Posted By: </b><?php the_author() ;?></span>
<span><b>Posted On: </b><?php the_time('F j, Y g:i a') ;?></span>
</div><!--close meta-->

<div class="thumbnail">
<?php if(has_post_thumbnail()) : ?>
    <a href="<?php the_permalink() ;?>">
    <?php the_post_thumbnail() ;?> </a>
<?php endif ;?>
</div><!--end thumbnail-->

<!-- WE ARE DISPLAYING THE ***EXCERPT***S ON THIS PAGE - THE HOME PAGE 
 THIS INDEX.PHP PAGE REPRESENTS ***ALL*** OF OUR POSTS -->
<?php the_excerpt() ;?>
<span class="block">
    <a href="<?php the_permalink() ;?>">Learn More About <?php the_title(); ?>!</a>
</span>

</article>
<?php endwhile ;?>

<?php else : ?>
<h2>Search Results:</h2>
<p>Sorry, we could not find any posts using your search terms. 
Try searching again using different keywords</p>
<?php endif ;?>
</main>

<?php get_sidebar() ;?>

</div><!--wrapper-->
<?php get_footer();?>