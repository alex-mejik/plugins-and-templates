<?php wp_get_header(); ?>

<div id="content" class="rounded">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<?php $count = 0; ?>
<div class="box <?php if (++$counter % 3 == 0) { echo "lastbox"; }?>" id="post-<?php the_ID(); ?>" id="post-<?php the_ID(); ?>">
<div class="cats">
<span class="tleft">
<?php
$category = get_the_category(); 
echo $category[0]->cat_name;
?>
</span>

<span class="tright" >
<?php comments_popup_link('0', '1', '%'); ?>
</span>
<div class="clear"></div>
</div>
<?php redm_home_image();?>
<div class="boxtitle">

	<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="קישור ישיר לפוסט <?php the_title(); ?>"><?php the_title(); ?></a></h2>

<div class="clear"></div>
</div>

<div class="cover">
<div class="entry">



<p><?php the_content_rss('', TRUE, '', 30); ?> </p>
</div>
	
</div>
</div>
<?php if(++$counter % 3 == 0) : ?>
<div class="clear"></div>
<?php endif; ?>
<?php endwhile; ?>
<div class="clear"></div>
<div id="navigation">
<?php if(function_exists('wp_pagenavi')) : ?>
<?php wp_pagenavi() ?>
<?php else : ?>
        <div class="alignleft"><?php next_posts_link(__('&laquo; לפוסטים הקודמים','arclite')) ?></div>
        <div class="alignright"><?php previous_posts_link(__('לפוסטים הבאים &raquo;','arclite')) ?></div>
        <div class="clear"></div>
<?php endif; ?>

</div>

<?php else : ?>
		<h1 class="title">לא נמצא</h1>
		<p>מצטערים, אבל מה שחיפשת לא נמצא כאן.</p>
<?php endif; ?>

</div>

<?php get_sidebar(); ?>

<?php wp_get_footer(); ?>