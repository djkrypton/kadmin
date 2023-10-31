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
	//**********[ BUILTIN ]***********

	case 'home': home_controller(); break;
	case 'login': login_controller(); break;
	case 'user-profile': user_profile_controller(); break;
	case 'error-404': error_404_controller(); break;

	//**********[ OTHERS ]***********

	default: error_404_controller(); break;
}