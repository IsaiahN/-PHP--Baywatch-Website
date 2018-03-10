<?php include("includes/header.php");?>

			<div class="main">
			<?php
			include("includes/mysql.php");
			if ((isset($_GET['season'])) && (!isset($_GET['episode']))) {
			$season = mysql_real_escape_string($_GET['season']);
			$query = "SELECT * FROM `table_bay` WHERE season='".$season."' AND episode='0'";
			$result = mysql_query($query) or die(mysql_error());
			$row = mysql_fetch_array($result);
			echo "<h1>Buy Season ".$season." Today!</h1>
			<img src=\"images/seasons/season".$season."img.jpg\" alt=\"Alternate Text\" id=\"seasonimg\">
			<a href=\"watch.php?".$_SERVER['QUERY_STRING']."&watch=pwl\"><img src=\"images/seasons/buys".$row['season'].".png\" alt=\"Alternate Text\" id=\"seasonbuy\" /></a>
			<p id=\"seasontext\">".$row['text']."</p>  <br /> 
			<iframe width=\"600\" height=\"370\" src=\"http://www.youtube.com/embed/rmauMVxHSds\" frameborder=\"0\" allowfullscreen></iframe>
			";
			// buying a season/paywall
			}
			elseif ((isset($_GET['season'])) && (isset($_GET['episode']))) {
			//watching an episode: accesstool
			$season = mysql_real_escape_string($_GET['season']);
			$episode = mysql_real_escape_string($_GET['episode']);
			?>
				<div id="video">
					<h1>Baywatch Season <? echo $season;?> Episode <? echo $episode;?></h1>
					<br> 
					<iframe src="http://www.youtube.com/embed/WtCQF4xaBLk" allowfullscreen="" frameborder="0" height="370" width="600"></iframe>
				</div>
			<? } ?>
			</div>
			
			<?php include("includes/sidebar.php");?>
			
			<?php include("includes/footer.php");?>