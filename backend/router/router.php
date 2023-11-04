<?php

/****************************************************/
/******************* ROUTER ************************/
/****************************************************/

write_access_log();

if (!isset($_GET['route']))
{
	return home_controller();
}

switch ($_GET['route']) 
{
	//**********[ HOME ]***********

	case 'home': home_controller(); break;

	//**********[ AUTH ]***********

	case 'login': login_controller(); break;

	//**********[ USER ]***********

	case 'profile': profile_controller(); break;

	//**********[ ERRO ]***********

	case 'error-404': error_404_controller(); break;

	//**********[ OTHERS ]***********

	default: error_404_controller(); break;
}