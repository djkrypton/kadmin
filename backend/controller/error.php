<?php

/***************************************
 * 
 * Description : Error 404 page
 * 
 * *************************************/

function error_404_controller()
{
	$param['title'] = "Page not found - 404";

	get_view('builtin/error-404', $param, false);
}