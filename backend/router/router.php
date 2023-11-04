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
	//**********[ GLOBAL ]***********

	case 'home': home_controller(); break;
	case 'faq': faq_controller(); break;
	case 'error-404': error_404_controller(); break;
	case 'table': table_controller(); break;

	//**********[ AUTH ]***********

	case 'login': login_controller(); break;

	//**********[ USER ]***********

	case 'profile': profile_controller(); break;

	//**********[ OTHERS ]***********

	default: error_404_controller(); break;
}