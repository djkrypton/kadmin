<?php

/***************************************
 * 
 * Description : Login process
 * 
 * *************************************/

 function login_controller()
 {
     $param['title'] = "Login";
 
     get_view('auth/login', $param, false);
 }