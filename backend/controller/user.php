<?php

/***************************************
 * 
 * Description : Login process
 * 
 * *************************************/

 function profile_controller()
 {
     $param['title'] = "User profile";
 
     get_view('builtin/profile', $param);
 }