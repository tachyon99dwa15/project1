<?php
?>

<!DOCTYPE html>
<html>
<head>

	<title>Peter Chen</title>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel='stylesheet' href='//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css' type='text/css'>
	<link href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/flatly/bootstrap.min.css" rel="stylesheet">

	<link href='css/main.css' rel='stylesheet'>

</head>
<body>

	<div class="container">

		<h1>Peter Chen</h1>

		<img src='peterchen.jpg' alt='Peter Chen'>

		<h2>About Me</h2>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus in pulvinar libero. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus in pulvinar libero. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
		</p>

		<h2>Random Quote</h2>
		<blockquote>
			<?php
				$quotes[] = 'We must be willing to let go of the life we planned so as to have the life that is waiting for us.';
				$quotes[] = 'Follow your bliss and the universe will open doors for you where there were only walls.';
				$quotes[] = 'You must give up the life you planned in order to have the life that is waiting for you.';

				$random_num = rand(0,count($quotes)-1);
				echo ($quotes[$random_num]);
  
					?>	
		</blockquote>

	</div>

	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

</body>
</html>

