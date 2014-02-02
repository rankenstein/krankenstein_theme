img {
	vertical-align: middle;
}

.profile-content-menu a {
	background-color: transparent;
}

.profile-admin-menu-wrapper {	
	background-color: #eee;
	
}

.profile-admin-menu-wrapper a:hover {
	background-color: #333;
	color: #eee;
	text-decoration: none;
	
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
}

.profile-admin-menu-wrapper li a {
	background: none;
	color: #333;
}

#profile-details h2 {
	font-weight: bold;
}

.messages-new {
	background-color: #FF4C12;
	border-radius: 10px;
	box-shadow: -2px 2px 4px rgba(0, 0, 0, 0.5);
	color: black;
	font-size: 10px;
	font-weight: bold;
	height: 16px;
	left: 20px;
	min-width: 16px;
	position: absolute;
	text-align: center;
	top: 12px;
}

.elgg-access, .elgg-input-access > option {
	padding-left: 19px;
	background-image: url('<?php echo elgg_get_site_url(); ?>mod/krankenstein_theme/_graphics/privacy.png');
	background-repeat: no-repeat;
}

.elgg-access {
	padding-top: 1px;
	padding-bottom: 1px;
}

.elgg-access-private, .elgg-input-access > option[value="<?php echo ACCESS_PRIVATE; ?>"] {
	background-position: 0 -65px;
}

.elgg-access-friends, .elgg-input-access > option[value="<?php echo ACCESS_FRIENDS; ?>"] {
	background-position: 0 -51px;
}

.elgg-access-loggedin, .elgg-input-access > option[value="<?php echo ACCESS_LOGGED_IN; ?>"] {
	background-position: 0 -34px;
}

.elgg-access-public, .elgg-input-access > option[value="<?php echo ACCESS_PUBLIC; ?>"] {
	background-position: 0 -16px;
}

.elgg-access-group, .elgg-input-access > option {
	background-position: 0 0;
}

.file-photo {
	margin-top: 15px;
}

.tasklist-graph {
	border: 1px solid #bbb;
}

.tasklist-graph div {
	background-color: #444;
}

.elgg-task-icon {
	box-shadow: none;
}

.treeview a.selected {
	background-color: transparent !important;
}

.tidypics-heading {
	color: #FF4C12;	
}

.tidypics-heading:hover {
	color: #333;
}

.tidypics-gallery .elgg-head {
	margin: 10px;
}

#cboxTitle, #cboxTitle h3, #cboxCurrent {
	color: #000;
}
#cboxTitle h3 {
	font-weight: bold;
	font-size: 160%;
}
#cboxOverlay {
	background-color: #FFF;
	opacity: 0.6 !important;
}
.event-calendar-lightbox {
	padding: 5px;
}

input[type=text], input[type=password], textarea {
	background-color: #fff;
}








body {
	font-family: sans-serif;
	font-size: 100%;
}

a {
	color: #4d9b00;
}

pre, code, .elgg-monospace {
	font-family: monospace;
	font-size: inherit;
	background: transparent;
}

blockquote {
	
	line-height: 1.3em;
	padding:10px 20px 10px 10px;
	margin:5px 5px 15px 20px;
	background: #E6D37E url(<?php echo elgg_get_site_url(); ?>mod/krankenstein_theme/_graphics/quotes.png) no-repeat right;
	border:none;
	box-shadow: 0px 1px 3px #666;
	
	
	-webkit-border-radius: 2px;
	-moz-border-radius: 2px;
	border-radius: 2px;
}

h1, h2, h3, h4, h5, h6 {
	color: #333;
}

.elgg-heading-site {
	display: none;
}

.elgg-heading-basic {
	color: #616068;
}

.elgg-loud {
	color: #d86c2c;
}


.elgg-image img {
	border-radius: 2px;
}

.elgg-avatar {
	border: none;
	box-shadow: none;
}

.groups-profile-icon img, .elgg-avatar-large > a > img {
	border-radius:4px;
	box-shadow: 0 0 10px #666;
	padding: 3px;
	width: auto;
	height: auto;
	background: #fff;
}

.widget_group_news_container .elgg-image {
	box-shadow: 0 0 2px #666;
	border-radius: 3px;
}

.widget_group_news_container .elgg-image img {
	border-radius: 3px;
}


.elgg-module-widget,
.elgg-module-group,
#profile-details,
.groups-profile-fields,
.elgg-sidebar,
#group-replies > .elgg-list > li,
.elgg-comments > .elgg-list > li,
#group-replies > form,
.elgg-comments > form,
#messages-reply-form,
.elgg-content > .elgg-image-block,
.elgg-content > .elgg-image-block + .elgg-output,
.elgg-content > .elgg-image-block + .bookmark,
.elgg-main > .elgg-image-block,
.elgg-main > .elgg-image-block + .elgg-output,
.elgg-main > .elgg-image-block + pre.pgparmor, /* Messages messed up by PGP plugin */
.list-proposal > li
{
	background-color: #fff;
	border-radius: 5px;
	box-shadow: 0 0 10px #bbb;
	border: 1px solid #bbb;
}

/* Do not apply box on group profile */
.elgg-main > .elgg-image-block.groups-profile {
	background: transparent;
	border-radius: none;
	box-shadow: none;
	border: none;
}

.elgg-module-widget,
.elgg-module-group
{
	padding: 0;
}

.groups-profile-fields,
#group-replies > .elgg-list > li,
.elgg-comments > .elgg-list > li,
#group-replies > form,
.elgg-comments > form,
#messages-reply-form,
.list-proposal > li
{
	padding: 5px;
}

.elgg-content > .elgg-image-block,
.elgg-main > .elgg-image-block
{
	border-bottom: none;
	padding: 5px 5px 0 5px;
	border-bottom-left-radius: 0;
	border-bottom-right-radius: 0;
}

/* Cover top box shadow of next element */
.elgg-content > .elgg-image-block:after,
.elgg-main > .elgg-image-block:after
{
	background-color: #fff;
	height: 10px;
	visibility: visible;
	margin: 0 -5px 0 -5px;
	z-index: 1;
	position: relative;
	color: #fff;
}

/* Revert for group profile */
.elgg-main > .elgg-image-block.groups-profile:after {
	height: 0;
}

.elgg-content > .elgg-image-block + .elgg-output,
.elgg-content > .elgg-image-block + .bookmark,
.elgg-main > .elgg-image-block + .elgg-output,
.elgg-main > .elgg-image-block + pre.pgparmor /* Messages messed up by PGP plugin */
{
	border-top: none;
	padding: 0 5px 5px 5px;
	margin-top: 0;
	border-top-left-radius: 0;
	border-top-right-radius: 0;
}

.elgg-sidebar {
	background-color:#e7e7e7;
	padding: 10px;
	margin-top: 10px;
	width: 20%;
}

.elgg-module-widget > .elgg-head,
.elgg-module-widget:hover > .elgg-head,
.elgg-module-group > .elgg-head
{
	line-height: 20px;
	background: #f8f8f8;
	border: none;
	border-radius: 5px 5px 0 0;
	width: auto;
	margin: 0;
	filter: none;
}

.elgg-module-group > .elgg-body
{
	border-top: 2px solid #dedede;
	padding: 8px;
}

ul.list-proposal.elgg-list {
	margin: 0;
	border: none;
}

.list-proposal > li.elgg-item {
	margin: 10px 0;
}

.elgg-module-widget > .elgg-head h3,
.elgg-module-widget:hover > .elgg-head h3,
/*.elgg-module-widget > .elgg-head .elgg-widget-collapse-button,*/
.elgg-module-widget > .elgg-head h3 a,
.elgg-module-widget > .elgg-head h3 a:hover,
.elgg-module-group > .elgg-head h3,
.elgg-module-group > .elgg-head .groups-widget-viewall a
{
	text-shadow: none;
	color: #6c6c6c;
}

.elgg-module-widget > .elgg-head .elgg-menu-item-collapse {
	line-height: 16px;
}

.elgg-body > li { /* Fix assembly widget */
	display:block;
}

#groups-tools > li {
	margin-bottom: 0;
	min-height: 0;
	width: 49%;
}

#groups-tools > li:nth-child(odd) {
	margin-right: 2%;
}


#profile-details .odd,
#profile-details .even,
.profile-aboutme-title,
.groups-profile-fields .odd,
.groups-profile-fields .even,
.group-submodule-box > .group-submodule-box-inner
{
	background: transparent;
}

.profile-aboutme-title {
	font-size: 1.2em;
	margin:1em 0 .5em 0;
}


.elgg-main {
	overflow: visible;
}

.elgg-page-body .elgg-inner {
	background: transparent;
	overflow: visible;
}


.elgg-menu-filter {
	padding-bottom:4px;
}

.elgg-menu-filter > li {
	border: none;
	background: transparent;
	position: static;
}

.elgg-menu-filter > li > a {
	line-height: 21px;
	border-radius: 3px;
}

.elgg-menu-filter > .elgg-state-selected a,.elgg-menu-filter > li a:hover,.elgg-menu-owner-block li.elgg-state-selected > a {
	background: #333;
	color: #eee;
}


#group-replies > .elgg-list > li,
.elgg-comments > .elgg-list > li
{
	margin-bottom: 10px;
}

#group-replies > form > fieldset > div > label,
.elgg-comments > form > fieldset > div > label,
.elgg-comments > form > fieldset > b > b > div > label /* Assemblies */
{
	font-weight: bold;
	font-size: 1.2em;
	margin: .5em 0 .5em 5px;
	display: block;
	float: left;
}

#group-replies > form > fieldset > div > .mce-container,
.elgg-comments > form > fieldset > div > .mce-container,
.elgg-comments > form > fieldset > b > b > div > .mce-container /* Assemblies */
{
	clear: left;
}


.elgg-layout-one-sidebar .elgg-main {
	left:26.5%;
	width:74%;
}

.elgg-sidebar {
	left:28%;
}


pre.pgparmor {
	float: none;
}

.elgg-page-header > .elgg-inner {
	background-image: url(<?php echo elgg_get_site_url(); ?>mod/krankenstein_theme/_graphics/pirate.svg);
	background-position: 650px top;
}









.elgg-page .cke_skin_BootstrapCK-Skin .cke_contents, .cke_skin_BootstrapCK-Skin .cke_contents iframe {
	background-color: #F7F7F7 !important;
	border: none !important;
}

/* BeeChat */
div#beechat_contacts_top {
    background-color: #333333;
}

div.beechat_chatbox_top {
    background-color: #333333;
}

