<?php

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