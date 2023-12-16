<?php

/** require / require_once / include / include_once*/

require_once "file.php"; //fatal error

include "file.php"; //warning error

require_once "file.php"; //do not show again

//include result warning reqire fatal error

echo "hello world";