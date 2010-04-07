<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
	<title>Not A Framework<?php if(isset($content[$page]['title'])) echo ' — '.$content[$page]['title']; ?></title>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
	<link rel="stylesheet" type="text/css" href="/css/styles.css"/>
</head>
<body>
	
	<h1>Not A Framework</h1>
		
	<div id="main">
		

		<?php
		if($content[$page]['include'] !== false)
			include('includes/content/'.$page.'.php');
		else
			echo $content[$page]['content'];
		?>		
		
		<div class="footer">
			
			<p>By Douglas Heriot, 2010</p>
			
		</div>
		
		
		

		
	</div>
	
</body>
</html>