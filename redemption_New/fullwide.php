<?php
/*
Template Name:Fullwide
*/
?>
<?php wp_get_header(); ?>
<div id="content" class="rounded" style="width:960px; margin-bottom:10px;">

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
		
<div class="post" id="post-<?php the_ID(); ?>">
<div class="title">
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="קישור ישיר לפוסט <?php the_title(); ?>"><?php the_title(); ?></a></h2>
</div>

<div class="cover">
<div class="entry">
<?php the_content('המשך קריאה &raquo;'); ?>
		<div class="clear"></div>
 <?php wp_link_pages(array('before' => '<p><strong>עמודים: </strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
</div>

</div>
</div>

<?php endwhile; endif; ?>
</div>		


<?php wp_get_footer(); ?>