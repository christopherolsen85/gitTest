<?php

require_once("views.php");

function crazy_page_controller()
{
	display_header("CrAZy!!?!!");
	crazy_page_view();
	display_footer();
}

function home_page_controller()
{
	display_header("Home");
	home_page_view();
	display_footer();
}



?>