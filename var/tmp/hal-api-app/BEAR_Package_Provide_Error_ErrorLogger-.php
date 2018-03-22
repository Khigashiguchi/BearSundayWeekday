<?php

namespace Ray\Di\Compiler;

$instance = new \BEAR\Package\Provide\Error\ErrorLogger($singleton('Psr\\Log\\LoggerInterface-', array('BEAR\\Package\\Provide\\Error\\ErrorLogger', '__construct', 'logger')), unserialize('O:20:"BEAR\\AppMeta\\AppMeta":4:{s:4:"name";s:31:"Khigashiguchi\\BearSundayWeekday";s:6:"appDir";s:72:"/Users/kazukihigashiguchi/src/github.com/Khigashiguchi.BearSundayWeekday";s:6:"tmpDir";s:92:"/Users/kazukihigashiguchi/src/github.com/Khigashiguchi.BearSundayWeekday/var/tmp/hal-api-app";s:6:"logDir";s:92:"/Users/kazukihigashiguchi/src/github.com/Khigashiguchi.BearSundayWeekday/var/log/hal-api-app";}'));
$is_singleton = false;
return $instance;