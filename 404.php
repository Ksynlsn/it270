<?php get_header();?>
<div id="wrapper">
    <!-- 404 -->
    <!-- add wrong page image -->
<main>
    <h2>This is somewhat embarrassing..</h2>
    <p>It looks like nothing was found at this location. Maybe try another search?</p>
            <?php get_search_form(); ?>
    <p>Or, browse through our pages!  </p>
            <?php wp_list_pages() ;?>
</main>

<aside>This is my 404 page</aside>

</div><!--wrapper-->
<?php get_footer();?>