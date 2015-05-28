jQuery(document).ready(function() {
jQuery('#slide').jqFancyTransitions({ 
width: 670, 
height: 300 ,
effect: 'curtain', // wave, zipper, curtain
strips: 10, // number of strips
delay: 3000, // delay between images in ms
stripDelay: 50, // delay beetwen strips in ms
titleOpacity: 0.7, // opacity of title
titleSpeed: 1000, // speed of title appereance in ms
position: 'alternate', // top, bottom, alternate, curtain
direction: 'fountainAlternate', // left, right, alternate, random, fountain, fountainAlternate
navigation: true, // prev and next navigation buttons
links:true // show images as links
});
jQuery('.squarebanner li:nth-child(even)').addClass('rbanner');
});