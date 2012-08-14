<?php
/**
 * Elgg Search css
 * 
 */
?>

/**********************************
Search plugin
***********************************/
.elgg-search-header {
	bottom: 5px;
	height: 23px;
	position: absolute;
	right: 0;
}
.elgg-search input[type=text] {
	width: 230px;
}
.elgg-search input[type=submit] {
	display: none;
}
.elgg-search input[type=text] {
	-webkit-border-radius: 2px;
	-moz-border-radius: 2px;
	border-radius: 2px;
	
	-moz-box-shadow: inset 0 0 5px #666;
	-webkit-box-shadow: inset 0 0 5px #666;
	box-shadow: inset 0 0 5px #666;
	
	border: 0;
	color: #666;
	font-size: 12px;
	font-weight: bold;
	padding: 4px 4px 4px 4px;
	background: #EEE url(<?php echo elgg_get_site_url(); ?>_graphics/elgg_sprites.png) no-repeat 210px -916px;
}
.search-list li {
	padding: 5px 0 0;
}
.search-heading-category {
	margin-top: 20px;
	color: #666666;
}

.search-highlight {
	background-color: #bbdaf7;
}
.search-highlight-color1 {
	background-color: #bbdaf7;
}
.search-highlight-color2 {
	background-color: #A0FFFF;
}
.search-highlight-color3 {
	background-color: #FDFFC3;
}
.search-highlight-color4 {
	background-color: #ccc;
}
.search-highlight-color5 {
	background-color: #4690d6;
}
