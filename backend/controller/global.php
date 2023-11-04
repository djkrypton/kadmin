<?php

/***************************************
 * 
 * Description : Home page
 * 
 * *************************************/

function home_controller()
{
	$param['title'] = "Home";

	get_view('global/home', $param);
}

/***************************************
 * 
 * Description : Documentation
 * 
 * *************************************/

 function faq_controller()
 {
	 $param['title'] = "FAQ";
 
	 get_view('global/faq', $param);
 }

 /***************************************
 * 
 * Description : Error 404 page
 * 
 * *************************************/

function error_404_controller()
{
	$param['title'] = "Page not found - 404";

	get_view('global/error-404', $param, false);
}