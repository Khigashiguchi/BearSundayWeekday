<?php

namespace Ray\Di\Compiler;

$instance = new \Khigashiguchi\BearSundayWeekday\Module\App($prototype('BEAR\\Sunday\\Extension\\Router\\RouterInterface-'), $prototype('BEAR\\Sunday\\Extension\\Transfer\\TransferInterface-'), $singleton('BEAR\\Resource\\ResourceInterface-'), $prototype('BEAR\\Sunday\\Extension\\Error\\ErrorInterface-'));
$is_singleton = false;
return $instance;