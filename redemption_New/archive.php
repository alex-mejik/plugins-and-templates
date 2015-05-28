<?php wp_get_header(); ?>
<div id="content" class="rounded">

<?php if (have_posts()) : ?>

		 <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
<?php /* If this is a category archive */ if (is_category()) { ?>
		<h2 class="pagetitle">ארכיון פוסטים עבור &#8216;<?php echo single_cat_title(); ?>&#8217; קטגוריה</h2>

 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2 class="pagetitle">ארכיון פוסטים <?php the_time('j בF, Y'); ?></h2>

	 <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2 class="pagetitle">ארכיון פוסטים <?php the_time('F, Y'); ?></h2>

		<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2 class="pagetitle">ארכיון פוסטים <?php the_time('Y'); ?></h2>

	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2 class="pagetitle">ארכיון מחברים</h2>

		<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2 class="pagetitle">ארכיון הבלוג</h2>

		<?php } ?>



<?php while (have_posts()) : the_post(); ?>
		
<div class="post" id="post-<?php the_ID(); ?>">

<div class="title">



<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="קישור ישיר לפוסט <?php the_title(); ?>"><?php the_title(); ?></a></h2>
	<span class="author"> פורסם ע"י <?php the_author(); ?></span> 
	<span class="comm"><?php comments_popup_link('0 תגובה', 'תגובה אחת', '% תגובות'); ?></span>
<div class="clear"></div>
</div>


<div class="cover">
<div class="entry">

	<?php the_excerpt(); ?> 

<div class="clear"></div>
	
</div>

</div>

<div class="singleinfo">

<span class="category">קטגוריות: <?php the_category(', '); ?> </span>

</div>


</div>
		<?php endwhile; ?>

 <div id="navigation">
<?php
if(function_exists('wp_pagenavi')) { wp_pagenavi(); }
?>
</div>

	<?php else : ?>

		<h1 class="title">לא נמצא</h1>
		<p>מצטערים, אבל מה שחיפשת לא נמצא כאן.</p>

	<?php endif; ?>

</div>
<?php get_sidebar(); ?>
<?php wp_get_footer(); ?>