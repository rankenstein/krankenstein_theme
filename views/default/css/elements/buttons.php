<?php
/**
 * CSS buttons
 *
 * @package Elgg.Core
 * @subpackage UI
 */
?>
/* **************************
	BUTTONS
************************** */

/* Base */
.elgg-button {
	font-size: 13px;
	font-weight: bold;
	
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;

	width: auto;
	padding: 2px 4px;
	cursor: pointer;
	outline: none;
	color: #666;
	
	background: #eeeeee; /* Old browsers */
	background: -moz-linear-gradient(top, #eeeeee 0%, #dddddd 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#eeeeee), color-stop(100%,#dddddd)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top, #eeeeee 0%,#dddddd 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top, #eeeeee 0%,#dddddd 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top, #eeeeee 0%,#dddddd 100%); /* IE10+ */
	background: linear-gradient(to bottom, #eeeeee 0%,#dddddd 100%); /* W3C */

}
a.elgg-button {
	padding: 4px 15px;
}

/* Submit: This button should convey, "you're about to take some definitive action" */
.elgg-button-submit {
	color: #ccc;
	text-decoration: none;


	background: #45484d; /* Old browsers */
	background: -moz-linear-gradient(top, #45484d 0%, #000000 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#45484d), color-stop(100%,#000000)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top, #45484d 0%,#000000 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top, #45484d 0%,#000000 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top, #45484d 0%,#000000 100%); /* IE10+ */
	background: linear-gradient(to bottom, #45484d 0%,#000000 100%); /* W3C */
}

.elgg-button-submit:hover {
	border-color: #d86c2c;
	text-decoration: none;
	color: white;
	
	background: #6d6d6d; /* Old browsers */
	background: -moz-linear-gradient(top, #6d6d6d 0%, #3d3d3d 100%, #3d3d3d 100%, #7f7f7f 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#6d6d6d), color-stop(100%,#3d3d3d), color-stop(100%,#3d3d3d), color-stop(100%,#7f7f7f)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top, #6d6d6d 0%,#3d3d3d 100%,#3d3d3d 100%,#7f7f7f 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top, #6d6d6d 0%,#3d3d3d 100%,#3d3d3d 100%,#7f7f7f 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top, #6d6d6d 0%,#3d3d3d 100%,#3d3d3d 100%,#7f7f7f 100%); /* IE10+ */
	background: linear-gradient(to bottom, #6d6d6d 0%,#3d3d3d 100%,#3d3d3d 100%,#7f7f7f 100%); /* W3C */
}

.elgg-button-submit.elgg-state-disabled {
	background: #999;
	cursor: default;

}

.elgg-button-submit.elgg-state-disabled:hover {
	color: #ccc;
	text-decoration: none;

	background: #45484d; /* Old browsers */
	background: -moz-linear-gradient(top, #45484d 0%, #000000 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#45484d), color-stop(100%,#000000)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top, #45484d 0%,#000000 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top, #45484d 0%,#000000 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top, #45484d 0%,#000000 100%); /* IE10+ */
	background: linear-gradient(to bottom, #45484d 0%,#000000 100%); /* W3C */
}

/* Cancel: This button should convey a negative but easily reversible action (e.g., turning off a plugin) */
.elgg-button-cancel {
	color: #888;
	text-decoration: none;
	
	
	background: #eeeeee; /* Old browsers */
	background: -moz-linear-gradient(top, #eeeeee 0%, #dddddd 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#eeeeee), color-stop(100%,#dddddd)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top, #eeeeee 0%,#dddddd 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top, #eeeeee 0%,#dddddd 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top, #eeeeee 0%,#dddddd 100%); /* IE10+ */
	background: linear-gradient(to bottom, #eeeeee 0%,#dddddd 100%); /* W3C */
	
}
.elgg-button-cancel:hover {
	color: #333;
	background: #bababa; /* Old browsers */
	background: -moz-linear-gradient(top, #bababa 0%, #a0a0a0 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#bababa), color-stop(100%,#a0a0a0)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top, #bababa 0%,#a0a0a0 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top, #bababa 0%,#a0a0a0 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top, #bababa 0%,#a0a0a0 100%); /* IE10+ */
	background: linear-gradient(to bottom, #bababa 0%,#a0a0a0 100%); /* W3C */
	text-decoration: none;
}

/* Action: This button should convey a normal, inconsequential action, such as clicking a link */
.elgg-button-action {
	color: #ccc;
	padding: 4px 20px;
	text-align: center;
	font-weight: bold;
	text-decoration: none;
	cursor: pointer;
	
	
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
	
	background: #45484d; /* Old browsers */
	background: -moz-linear-gradient(top, #45484d 0%, #000000 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#45484d), color-stop(100%,#000000)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top, #45484d 0%,#000000 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top, #45484d 0%,#000000 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top, #45484d 0%,#000000 100%); /* IE10+ */
	background: linear-gradient(to bottom, #45484d 0%,#000000 100%); /* W3C */
}


.elgg-button-action:hover,
.elgg-button-action:focus {
	color: #fff;
	
	
	background: #6d6d6d; /* Old browsers */
	background: -moz-linear-gradient(top, #6d6d6d 0%, #3d3d3d 100%, #3d3d3d 100%, #7f7f7f 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#6d6d6d), color-stop(100%,#3d3d3d), color-stop(100%,#3d3d3d), color-stop(100%,#7f7f7f)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top, #6d6d6d 0%,#3d3d3d 100%,#3d3d3d 100%,#7f7f7f 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top, #6d6d6d 0%,#3d3d3d 100%,#3d3d3d 100%,#7f7f7f 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top, #6d6d6d 0%,#3d3d3d 100%,#3d3d3d 100%,#7f7f7f 100%); /* IE10+ */
	background: linear-gradient(to bottom, #6d6d6d 0%,#3d3d3d 100%,#3d3d3d 100%,#7f7f7f 100%); /* W3C */
	text-decoration: none;
	
}

/* Delete: This button should convey "be careful before you click me" */
.elgg-button-delete {
	
	color: #DB3939;

	background: #45484d; /* Old browsers */
	background: -moz-linear-gradient(top, #45484d 0%, #000000 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#45484d), color-stop(100%,#000000)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top, #45484d 0%,#000000 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top, #45484d 0%,#000000 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top, #45484d 0%,#000000 100%); /* IE10+ */
	background: linear-gradient(to bottom, #45484d 0%,#000000 100%); /* W3C */	

	border: 1px solid #999;
}
.elgg-button-delete:hover {
	color: #DB3939;

	background: #6d6d6d; /* Old browsers */
	background: -moz-linear-gradient(top, #6d6d6d 0%, #3d3d3d 100%, #3d3d3d 100%, #7f7f7f 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#6d6d6d), color-stop(100%,#3d3d3d), color-stop(100%,#3d3d3d), color-stop(100%,#7f7f7f)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top, #6d6d6d 0%,#3d3d3d 100%,#3d3d3d 100%,#7f7f7f 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top, #6d6d6d 0%,#3d3d3d 100%,#3d3d3d 100%,#7f7f7f 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top, #6d6d6d 0%,#3d3d3d 100%,#3d3d3d 100%,#7f7f7f 100%); /* IE10+ */
	background: linear-gradient(to bottom, #6d6d6d 0%,#3d3d3d 100%,#3d3d3d 100%,#7f7f7f 100%); /* W3C */
	text-decoration: none;
}

.elgg-button-dropdown {
	padding:3px 6px;
	text-decoration:none;
	display:block;
	font-weight:bold;
	position:relative;
	margin-left:0;
	color: white;
	border:1px solid #d86c2c;
	
	-webkit-border-radius:4px;
	-moz-border-radius:4px;
	border-radius:4px;
	
	-webkit-box-shadow: 0 0 0;
	-moz-box-shadow: 0 0 0;
	box-shadow: 0 0 0;
	
	/*background-image:url(<?php echo elgg_get_site_url(); ?>_graphics/elgg_sprites.png);
	background-position:-150px -51px;
	background-repeat:no-repeat;*/
}

.elgg-button-dropdown:after {
	content: " \25BC ";
	font-size:smaller;
}

.elgg-button-dropdown:hover {
	color: white;
	background-color: #d86c2c;
	text-decoration:none;
}

.elgg-button-dropdown.elgg-state-active {
	background: #ccc;
	outline: none;
	color: #333;
	border:1px solid #ccc;
	
	-webkit-border-radius:4px 4px 0 0;
	-moz-border-radius:4px 4px 0 0;
	border-radius:4px 4px 0 0;
}
