<?php

#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Filename       logout.php                                                  ##
##  Developed by:  Dzoki                                                       ##
##  License:       TravianX Project                                            ##
##  Copyright:     TravianX (c) 2010-2011. All rights reserved.                ##
##                                                                             ##
#################################################################################


include("GameEngine/Account.php");
$start = $generator->pageLoadTimeStart();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
		<title><?php echo SERVER_NAME; ?></title>
		<meta name="content-language" content="en" />
		<meta http-equiv="cache-control" content="max-age=0" />
		<meta http-equiv="imagetoolbar" content="no" />
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<script src="mt-core.js?2389c" type="text/javascript"></script>

		<script src="mt-more.js?2389c" type="text/javascript"></script>
		<script src="unx.js?2389c" type="text/javascript"></script>
		<script src="new.js?2389c" type="text/javascript"></script>
	<link href="<?php echo GP_LOCATE; ?>lang/en/lang.css?f4b7c" rel="stylesheet" type="text/css" />
	<link href="<?php echo GP_LOCATE; ?>lang/en/compact.css?f4b7c" rel="stylesheet" type="text/css" />
	<?php
	if($session->gpack == null || GP_ENABLE == false) {
	echo "
	<link href='".GP_LOCATE."travian.css?e21d2' rel='stylesheet' type='text/css' />
	<link href='".GP_LOCATE."lang/en/lang.css?e21d2' rel='stylesheet' type='text/css' />";
	} else {
	echo "
	<link href='".$session->gpack."travian.css?e21d2' rel='stylesheet' type='text/css' />
	<link href='".$session->gpack."lang/en/lang.css?e21d2' rel='stylesheet' type='text/css' />";
	}
	?>
	<script type="text/javascript">

		window.addEvent('domready', start);
	</script>
</head>


<body class="v35 ie ie8">
<div class="wrapper">
<img style="filter:chroma();" src="img/x.gif" id="msfilter" alt="" />
<div id="dynamic_header">
	</div>
<div id="header"></div>

<div id="mid">
<?php include("Templates/menu.tpl"); ?>
		<div id="content"  class="logout">
		<center>
<h1>ההתנתקות הצליחה!.</h1><img class="roman" src="img/x.gif" alt=""><p>תודה על שנכנסתה לשרת שלנו!.</p>

<p>עם עוד אנשים משתמשים במחשב שלך אנא בבקשה מחק את העוגיות!
:<br /><a href="login.php?del_cookie">&raquo; לחץ כאן כדי למחוק את העוגיות</a></p>
</div>

</br></br></br></br><div id="side_info">
<?php
include("Templates/news.tpl");
?>
</div>
<div class="clear"></div>
</div>
<div class="footer-stopper"></div>
<div class="clear"></div>

<?php
include("Templates/footer.tpl");
?>
<div id="stime">
<div id="ltime">
<div id="ltimeWrap">
מחושב <b><?php
echo round(($generator->pageLoadTimeEnd()-$start)*1000);
?></b> ms

<br />זמן שרת: <span id="tp1" class="b"><?php echo date('H:i:s'); ?></span>
</div>
	</div>
</div>
<div id="ce"></div>
</center>
</body>
</html>
