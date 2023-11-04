<?php

/***************************************
 * 
 * Description : Write access log
 * 
 * *************************************/

function write_access_log()
{
    $file_path = BACKEND_DIR .'/log/access/';
    $file_name = 'access-'. date('m-Y') .'.log';
    $data = date('d/m/Y H:i:s') .';'. $_SERVER['REMOTE_ADDR'] .';'. $_SERVER['REQUEST_URI'] . PHP_EOL;
    file_put_contents($file_path . $file_name, $data, FILE_APPEND | LOCK_EX);
}