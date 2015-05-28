<div id="feature">
<div id="mygallery">

<div  id="slide">
<?php 
	$gldcat = get_option('redm_gldcat'); 
	$gldct = get_option('redm_gldct');
	$my_query = new WP_Query('category_name='.$gldcat.'&showposts='.$gldct.'');
	while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID;
?>
<img src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php get_image_url(); ?>&amp;h=300&amp;w=670&amp;zc=1" alt="<?php the_content_rss('', TRUE, '', 30); ?> "/>
<a href="<?php the_permalink() ?>">	</a>
<?php endwhile; ?>
</div >
	
</div>

<div id="welcome">
<h2> Welcome to <?php bloginfo('name');?></h2>
<img src="<?php $myimg = get_option('redm_myimg'); echo ($myimg); ?>"/>
<p>
<?php $mytxt = get_option('redm_mytxt'); echo ($mytxt); ?>
</p>
</div>

<div class="clear"></div>  

</div>