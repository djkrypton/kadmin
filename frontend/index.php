<?php

session_start();

require '../backend/config/config.php';

require BACKEND_DIR . '/vendor/autoload.php';
require BACKEND_DIR . '/middleware/middleware.php';
require BACKEND_DIR . '/controller/controller.php';
require BACKEND_DIR . '/model/model.php';
require BACKEND_DIR . '/variable/variable.php';
require BACKEND_DIR . '/router/router.php';
