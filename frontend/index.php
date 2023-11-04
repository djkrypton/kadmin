<?php

session_start();

require '../backend/config/config.php';

require BACKEND_DIR . '/vendor/autoload.php';
require BACKEND_DIR . '/middleware/autoload.php';
require BACKEND_DIR . '/controller/autoload.php';
require BACKEND_DIR . '/model/autoload.php';
require BACKEND_DIR . '/variable/autoload.php';
require BACKEND_DIR . '/router/router.php';
