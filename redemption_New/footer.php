
<?php include (TEMPLATEPATH . '/bottom.php'); ?>	

<div id="footer" >
	
<div class="fleft">

עיצוב: <a href="http://web2feel.com/">Web2feel.com</a> | <?php 
/* תבנית זו מוגנת בזכויות יוצרים, אין להוריד את הקישורים הנלווים לתבנית ללא אישור מפורש בכתב מאתר themes.org.il כולל הערה זו */
			wp_translate_credits();
/* תבנית זו מוגנת בזכויות יוצרים, אין להוריד את הקישורים הנלווים לתבנית ללא אישור מפורש בכתב מאתר themes.org.il כולל הערה זו */ ?>  <br/>
זכויות יוצרים &copy; <?php echo date('Y');?> <?php bloginfo('name');?> &ndash; <?php bloginfo('description'); ?>
<br/>
<?php $foot = get_option('redm_foot'); echo stripslashes($foot); ?>
</div>

<div class="fright">
<a href="<?php bloginfo('rss2_url'); ?>">הרשם לפוסטים</a> | <a href="<?php bloginfo('comments_rss2_url'); ?>">הרשם לתגובות</a>
</div>
<div class='clear'></div>	
	</div>

<?php wp_footer(); ?>

</body>
</html>      