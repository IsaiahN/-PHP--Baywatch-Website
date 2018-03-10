<?php 
include("includes/header.php");
echo'

			<div class="main">';
			        
			        $queryf = "SELECT * FROM `table_bay` WHERE `season`='1' AND episode = '3'";
				$vidf= mysql_fetch_array(mysql_query($queryf));
				$text = substr($vidf["text"],0,135);
				$text = substr($text,0,strrpos($text,' '));
        			$text = $text." ...";
			        echo '
				<div id="feat_video">
					<a href="watch.php?season='.$vidf["season"].'&amp;episode='.$vidf["episode"].'&amp;watch=act"><img class="feat_img" src="images/vidthumbs/s'.$vidf["season"].'e'.$vidf["episode"].'.png" alt="Season '.$vidf["season"].' Episode '.$vidf["episode"].'"></a>
					<h1>Featured Video - Season '.$vidf["season"].' Episode '.$vidf["episode"].'</h1>
					<h2>'.$vidf["episode_title"].'</h2>
					<span>'.$text.'</span> 
				</div>
				';
				$query = "SELECT * FROM `table_bay` WHERE `season`='1' AND episode > '0' ORDER BY `episode` ASC LIMIT 5";
				$result = mysql_query($query) or die(mysql_error());
				while ($vid = mysql_fetch_array($result)) {
				$text = substr($vid["text"],0,135);
				$text = substr($text,0,strrpos($text,' '));
        			$text = $text." ...";
				echo '
				<div class="feat_title">
					<a href="watch.php?season='.$vid["season"].'&amp;episode='.$vid["episode"].'&amp;watch=act"><img class="feat_img" src="images/vidthumbs/s'.$vid["season"].'e'.$vid["episode"].'.png" alt="Season '.$vid["season"].' Episode '.$vid["episode"].'"></a>
					<h1>Season '.$vid["season"].' Episode '.$vid["episode"].': '.$vid["episode_title"].'</h1>
					<h2>'.$vid["episode_title"].'</h2>
					<span>'.$text.'</span> 
					<a href="watch.php?season='.$vid["season"].'&amp;episode='.$vid["episode"].'"><img src="images/watchbtn.png" class="watchbtn" alt="Watch it Now"></a>
				</div>';
				}
				?>
			</div>
			
			<?php include("includes/sidebar.php");?>
			
			<?php include("includes/footer.php");?>