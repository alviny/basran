<? $in_admin = ( strpos($_SERVER['PHP_SELF'], "calendar/admin") != false ) ? true : false ; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title> Cheung's Taekwondo&#174; - <?=$page_title?></title>
<meta name="Generator" content="EditPlus">
<meta name="Author" content="">
<meta name="Keywords" content="">
<meta name="Description" content="">
<style type="text/css" media="screen, tv, projection">
/*<![CDATA[*/

/* page styling, unimportant for the menu. only makes the page looks nicer */
body {
	font-family: "Arial", sans-serif;
	font-size: 10pt;
	margin: 0;
	padding: 0;
}

h1 {font-size: 1.5em; padding: 0; line-height: 1em; }
h2 {font-size: 1.25em;}

input, textarea {
	font-family: "Arial", sans-serif;
	font-size: 10pt;
}

.example {
	position:absolute;
	top:244px;
	left:3px;
}

/* - - - ADxMenu: BASIC styles - - - */

.menu {
	width: 10em;/* VERY IMPORTANT! Set this to appropriate value, either here on down in the design section */
}

.menu, .menu ul {	/* remove all list stylings */
	margin: 0;
	padding: 0;
	border: 0;
	list-style-type: none;
	display: block;
}

.menu li {
	margin: 0;
	padding: 0;
	border: 0;
	display: block;
	position: relative;	/* position each LI, thus creating potential IE.win overlap problem */
	z-index: 5;		/* thus we need to apply explicit z-index here... */
}

.menu li:hover {
	z-index: 10000;	/* ...and here. this makes sure active item is always above anything else in the menu */
	white-space: normal;/* required to resolve IE7 :hover bug (z-index above is ignored if this is not present)
							see http://www.tanfa.co.uk/css/articles/pure-css-popups-bug.asp for other stuff that work */
}

.menu ul {
	visibility: hidden;	/* initially hide all submenus. */
	position: absolute;
	z-index: 10;
	left: 0;	/* while hidden, always keep them at the top left corner, */
	top: 0;		/* 		to avoid scrollbars as much as possible */
}

.menu li:hover>ul {
	visibility: visible;	/* display submenu them on hover */
	left: 100%;	/* and move them to the right of the item */
}

/* -- float.clear --
	force containment of floated LIs inside of UL */
.menu:after, .menu ul:after {
	content: ".";
	height: 0;
	display: block;
	visibility: hidden;
	overflow: hidden;
	clear: both;
}
.menu, .menu ul {	/* IE7 float clear: */
	min-height: 0;
}
/* -- float.clear.END --  */

/* sticky submenu: it should not disappear when your mouse moves a bit outside the submenu
	YOU SHOULD NOT STYLE the background of the ".menu UL" or this feature may not work properly!
	if you do it, make sure you 110% know what you do */
.menu ul {
	background-image: url(/empty.gif);	/* required for sticky to work in IE6 and IE7 - due to their (different) hover bugs */
	padding: 30px 30px 30px 10px;
	margin: -30px 0 0 -10px;
	/*background: #f00;*/	/* uncomment this if you want to see the "safe" area.
								you can also use to adjust the safe area to your requirement */
}


/* - - - ADxMenu: DESIGN styles - - - */

.menu, .menu ul li {
	color: #eee;
	background: #d91000;
}

.menu {
	width: 12em;
}

.menu ul {
	width: 12em;
}

.menu a {
	text-decoration: none;
	color: #eee;
	padding: .4em 1em;
	display: block;
}

.menu a:hover, .menu li:hover>a {
	color: #f8ed37;
	background: #1e245e;
}

.menu li {	/* create borders around each item */
	border: 0px solid #ccc;
}
.menu>li + li, .menu ul>li + li {	/* and remove the top border on all but first item in the list */
	border-top: 0;
}

.menu li:hover>ul {	/* inset submenus, to show off overlapping */
	top: 5px;
	left: 90%;
}

/* special colouring for "Main menu:", and for "xx submenu" items in ADxMenu
	placed here to clarify the terminology I use when referencing submenus in posts 
.menu>li:first-child>a, .menu li + li + li li:first-child>a {
	color: #fff;
}
*/
/*]]>*/
</style>

<!--[if lte IE 6]>
<style type="text/css" media="screen, tv, projection">
/*<![CDATA[*/

/* - - - ADxMenu: BASIC styles - - - */

.menu, .menu ul {	/* float.clear */
	zoom: 1;
}

.menu li.adxmhover {
	z-index: 10000;
}

.menu .adxmhoverUL {	/* li:hover>ul selector */
	visibility: visible;
}

.menu .adxmhoverUL {	/* submenu goes to the right */
	left: 100%;
}

/* - - - ADxMenu: DESIGN styles - - - */

.menu ul a {	/* fix clickability-area problem */
	zoom: 1;
}

.menu li {	/* fix white gap problem */
	float: left;
	width: 100%;
}

.menu li {	/* prevent double-line between items */
	margin-top: -1px;
}

.menu a:hover, .menu .adxmhoverA {		/* li:hover>a selector */
	color: #f8ed37;
	background: #1e245e;
}

.menu .adxmhoverUL {	/* inset submenus, to show off overlapping */
	top: 5px;
	left: 90%;
}

/*]]>*/
</style>

<script type="text/javascript" src="/ADxMenu.js"></script>
<![endif]-->
</head>

<body topmargin="0" leftmargin="0" class="adxmenu">

<? include $DOCUMENT_ROOT . "/menu.php"; ?>
<img src ="images/basran_bannerv2.jpg" />
<!--<object width="746" height="244" 
  classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"
  codebase="http://fpdownload.macromedia.com/pub/
  shockwave/cabs/flash/swflash.cab#version=8,0,0,0">
<param name="movie" value="/header2.swf" />
<param name="menu" value="false" />
<param name="quality" value="high" />
<param name="bgcolor" value="#ffffff" />
<param name="wmode" value="transparent" />
<embed src="/header2.swf" width="746" height="244" 
  menu="false" quality="high" wmode="transparent" bgcolor="#ffffff" 
  type="application/x-shockwave-flash" pluginspage=
  "http://www.macromedia.com/go/getflashplayer" />
</object><br />--><table border="0" cellpadding="0" cellspacing="0">
<tr>
	<td valign="top" rowspan="2" style="width: 12.25em;" bgcolor="#d91000"></td>
	<td valign="bottom" background="/images/top_banner.gif" style="height: 47px; width: 574px;"><h1 style="color: white;">&nbsp;&nbsp;&nbsp;<?=$page_title?></h1></td>	
</tr>
<tr>
	<td valign="top" style="padding: 10px;" width="550">