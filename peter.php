<?php
?>

<!DOCTYPE html>
<html>
<head>

	<title>Peter Chen</title>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">





</head>
<body>

	<div class="container">

		<h1>Peter Chen</h1>

		<img src='peterchen.jpg' alt='Peter Chen'>

		<h2>About Me</h2>
		<p>
			Hello. My name is Peter Chen. I'm a master candidate in software engineering at HES. 
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



</body>
</html>

