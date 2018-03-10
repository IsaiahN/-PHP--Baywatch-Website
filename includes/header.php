<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>TheRealBaywatch.com | Watch Online</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<!--[if lte IE 7]>
		<style type="text/css">
		#wrapper .main { top: 20px; margin-bottom: 40px; }
		#wrapper .sidebar { top: 35px; }
		.watermark {margin-top: -10px;)
		</style>
		<![endif]-->
		<? 
		include("includes/mysql.php");
		if (isset($_GET['watch'])) {
		echo '
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js?ver=1.7.1"></script>
		<script type="text/javascript" src="http://www.blvd-media.com/AccessTool/swfobject.js"></script>
		<noscript><meta http-equiv=\'refresh\' content=\'0;url=http://www.blvd-media.com/nojava.html\' /></noscript>
		<style type="text/css">
		#blvdflash {
		margin: 0px;
		padding: 0px;
		position: absolute;
		top: 0px;
		left: 0px;
		right: 0px;
		z-index: 9999;
		}
		</style>
		<script type="text/javascript">
			var querystring = window.location.querystring;
			var pubid = querystring["pubid"];
			if (pubid == undefined) {
				var prefix = window.location;
				window.location = prefix + \'&pubid=1269&subid='.$_SERVER["REMOTE_ADDR"].'\';
			}
		</script>';
		} ?>
	</head>
	<body>
		<? if ((isset($_GET['watch'])) && ($_GET['watch'] == "pwl" )) { ?>
		<script type="text/javascript" src="../../etc/accessTool2.js"></script>
		<div onload="onPageLoad();" onunload="onPageUnload();" style="margin:0px; padding:0px; position:fixed; width:100%; height:100%;z-index:999;left: 0; top: 0;" id="accessToolContainer"> <div style="margin:0px; padding:0px; position:fixed; width:100%; height:100%; left: 0; top: 0;"> <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="100%" height="100%" id="myFlashContent"> <param name="movie" value="http://amanda-latona.com/etc/AccessTool2.swf" /> <param name="quality" value="high" /> <param name="scale" value="ExactFit" /> <param name="wmode" value="transparent" /> <param name="allowScriptAccess" value="always" /> <param name="FlashVars" value="wURL=paywall.artifextech.com/Service" /> <!--[if !IE]>--> <object type="application/x-shockwave-flash" FlashVars="wURL=paywall.artifextech.com/Service" data="http://amanda-latona.com/etc/AccessTool2.swf" width="100%" height="100%"> <param name="quality" value="high" /> <param name="scale" value="ExactFit" /> <param name="wmode" value="transparent" /> <param name="allowScriptAccess" value="always" /> <!--<![endif]--> <div id="atOverlay" style="width:100%; height:100%; background-color:Black; position:absolute; filter:alpha(opacity=80); -moz-opacity:80%; opacity:0.8;">
		<a href="http://www.adobe.com/go/getflashplayer"> <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /> </a> </div> <!--[if !IE]>--> </object> <!--<![endif]--> </object> </div> </div> 
		<? } elseif ($_GET['watch'] == "act") { ?>
		<script type="text/javascript" src="http://www.blvd-media.com/AccessTool/accessTool.js"></script>
		<div style="margin:0;padding:0;position:fixed;width:100%;height:100%;" id="accessToolContainer"><div style="margin:0;padding:0;position:fixed;width:100%;height:100%;"><object type="application/x-shockwave-flash" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="100%" height="100%" id="myFlashContent"><param name="movie" value="http://www.blvd-media.com/AccessTool/AccessTool.swf" /><param name="menu" value="true" /><param name="quality" value="high" /><param name="scale" value="exactfit" /><param name="wmode" value="transparent" /><param name="bgcolor" value="transpa" /><param name="allowscriptaccess" value="always" /><!--[if !IE]>--><object type="application/x-shockwave-flash" id="blvdflash" style="position:fixed;" data="http://www.blvd-media.com/AccessTool/AccessTool.swf" width="100%" height="100%"><param name="quality" value="high" /><param name="menu" value="true" /><param name="quality" value="high" /><param name="scale" value="exactfit" /><param name="wmode" value="transparent" /><param name="bgcolor" value="transpa" /><param name="allowscriptaccess" value="always" /><!--<![endif]--><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></div><!--[if !IE]>--></object><!--<![endif]--></object></div></div>
		<? } ?>
		<div id="wrapper">	
			<div id="header">
				<dl class="image_map logo">
				  <dd><a class="LINK0" title="BayWatch | Watch Online" href="/"></a></dd>
				</dl>
				<ul class="nav">  
				 <li><a href="#">Contact</a></li>
				 <li><a href="#">Random Link</a></li>
				 <li><a href="#">Episodes</a></li>
				 <li><a href="#">Seasons</a></li>
				 <li><a href="#">Home</a></li> 
				   
				  
				  
				  
				  
				</ul> 	
				<ul class="subnav">
				  <li class="span">Choose A Season:</li>  
				  <li><a href="watch.php?season=1">1</a></li>  
				  <li><a href="watch.php?season=2">2</a></li>
				  <li><a href="watch.php?season=3">3</a></li>
				  <li><a href="watch.php?season=4">4</a></li>
				  <li><a href="watch.php?season=5">5</a></li>
				  <li><a href="watch.php?season=6">6</a></li>
				  <li><a href="watch.php?season=7">7</a></li>
				  <li><a href="watch.php?season=8">8</a></li>
				  <li><a href="watch.php?season=9">9</a></li>
				  <li><a href="watch.php?season=10">10</a></li>
				  <li><a href="watch.php?season=11">11</a></li>
				</ul> 
			</div>