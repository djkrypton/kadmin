<?php

/***********************************************************/
/******************* MODEL ************************/
/***********************************************************/

// inclusion des autres fichiers du repertoire
$directory = dirname(__FILE__);
$files = array_diff(scandir($directory), array('.', '..', basename(__FILE__)));
foreach ($files as $value) require_once $directory .'/'. $value;