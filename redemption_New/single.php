<?php wp_get_header(); ?>

<div id="content" class="rounded">

<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>

<div <?php post_class('post') ?> id="post-<?php the_ID(); ?>">
<div class="title">



<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="קישור ישיר לפוסט <?php the_title(); ?>"><?php the_title(); ?></a></h2>
	<span class="author"> פורסם ע"י <?php the_author(); ?></span> 
	<span class="comm"><?php comments_popup_link('0 תגובה', 'תגובה אחת', '% תגובות'); ?></span>
<div class="clear"></div>
</div>

<div class="cover">
<div class="entry">

<?php the_content('המשך קריאה &raquo;'); ?>
<?php include (TEMPLATEPATH . '/ad1.php'); ?>
<div class="clear"></div>
<?php wp_link_pages(array('before' => '<p><strong>עמודים: </strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
</div>

</div>

<div class="singleinfo">

<span class="category">קטגוריות: <?php the_category(', '); ?> </span>

</div>

</div>


<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<h1 class="title">לא נמצא</h1>
		<p>מצטערים, אך מה שחיפשת אינו נמצא כאן. יש לנסות חיפוש חדש</p>

<?php endif; ?>

</div>

<?php get_sidebar(); ?>
<?php wp_get_footer(); ?>