<div class="right">

<div class="featbox">
	<h3 class="sidetitl "> פוסטים פופולארים </h3>	
	<div class="featlist ">
<?php 
	$my_query = new WP_Query('orderby=comment_count&showposts=5');
	while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID;
?>
<div class="fblock">

<a href="<?php the_permalink() ?>">	<?php redm_thumb_image();?></a>
<h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php echo substr($post->post_title,0,20); ?></a></h3>
<p>  <?php the_content_rss('', TRUE, '', 10); ?> </p>

</div>
<?php endwhile; ?>

</div>
</div>	
	


<?php include (TEMPLATEPATH . '/sponsors.php'); ?>	

<div class="sidebar">
<ul>
	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar') ) : else : ?>
	<?php endif; ?>
</ul>
</div>

</div>