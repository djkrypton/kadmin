<?php

/***************************************
 * 
 * Description : Get view file and display it
 * 
 * *************************************/

function get_view (string $file_path, array $param = null, bool $enable_template = true)
{
    $latte = new Latte\Engine;
    $latte->setTempDirectory(BACKEND_DIR . '/tmp/');

    // Use custom page without default template
    if ($enable_template == false)
    {
        return $latte->render(BACKEND_DIR . '/view/'. $file_path .'.php', $param);
    }

    $param['main_content'] = BACKEND_DIR . '/view/'. $file_path .'.php';

    $latte->render(BACKEND_DIR . '/view/template/main.php', $param);   
}