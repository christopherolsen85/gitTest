<?php

function display_header($title)
{
	echo<<<_END
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
_END;
}

function display_footer()
{
	echo<<<_END
	
</body>
</html>
_END;
}

function crazy_page_view()
{
	echo<<<_END
	
	<h2>FUCK YOU, BITCH! I AIN'T CRAZY!! YOU'RE CRAZY!!</h2>
	<a href="http://localhost/gitTest">Okay, okay, you're not crazy! Sheesh...</a>
_END;
}

function home_page_view()
{
	echo<<<_END
	
	<h1>Home Page!!</h1>
	<a href="http://localhost/gitTest/crazy">You're crazy, man</a>
_END;
}


?>