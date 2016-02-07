<html>
	<body>

		You have request the song : <?php echo $_POST["song"]; ?><br>
		
		<!--<?php
			$songName = $_POST["song"];
			$path = $_POST["dir"];
			$file = $path.$songName.".mp3";
			
			if (file_exists($file)) {
				echo "The file |$file| exists";
			} else {
				echo "The file $file doesn't exist";
			}
		?> -->
		
		<br><br>

		<object type="application/x-shockwave-flash" width="150" height="25" data="https://www.youtube.com/v/h_XGxs3yBm8?version=2&enablejsapi=1&theme=dark"><param name="movie" value="https://www.youtube.com/v/h_XGxs3yBm8?version=2&enablejsapi=1&theme=dark" /><param name="wmode" value="transparent" /></object>
		
	
		
	</body>
</html>