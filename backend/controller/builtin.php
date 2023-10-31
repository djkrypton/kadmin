<?php

/***************************************
 * 
 * Description : Home page
 * 
 * *************************************/

function home_controller()
{
	$param['title'] = "Krypton App";

	get_view('builtin/home', $param);
}

/***************************************
 * 
 * Description : Login process
 * 
 * *************************************/

function login_controller()
{
	$param['title'] = "Login";

	get_view('builtin/login', $param, false);
}

/***************************************
 * 
 * Description : Login process
 * 
 * *************************************/

function user_profile_controller()
{
	$param['title'] = "User profile";

	get_view('builtin/user-profile', $param);
}

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