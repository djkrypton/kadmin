<?php

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

    $latte->render(BACKEND_DIR . '/view/builtin/main.php', $param);   
}

function write_access_log()
{
    $file_path = BACKEND_DIR .'/log/access/';
    $file_name = 'access-'. date('m-Y') .'.log';
    $data = date('d/m/Y H:i:s') .';'. $_SERVER['REMOTE_ADDR'] .';'. $_SERVER['REQUEST_URI'] . PHP_EOL;
    file_put_contents($file_path . $file_name, $data, FILE_APPEND | LOCK_EX);
}