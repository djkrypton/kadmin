<?php

/***************************************
 * 
 * Description : Home page
 * 
 * *************************************/

function home_controller()
{
	$param['title'] = "Krypton App";

	get_view('global/home', $param);
}