<?php wp_get_header(); ?>

<div id="content" class="rounded">
<h2 class="pagetitle">תוצאות חיפוש</h2>
<?php if (have_posts()) : ?>

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


<h1>לא נמצא</h1>


<div class="cover">
<div class="entry">
		<p>סליחה, אך החיפוש אינו תואם אף פוסט, לנסות חיפוש חדש?</p>
				
</div>

</div>
<?php endif; ?>

</div>

<?php get_sidebar(); ?>

<?php wp_get_footer(); ?>