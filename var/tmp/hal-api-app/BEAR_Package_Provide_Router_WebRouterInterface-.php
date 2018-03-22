<?php

namespace Ray\Di\Compiler;

$instance = new \BEAR\Package\Provide\Router\WebRouter('app://self', $prototype('BEAR\\Package\\Provide\\Router\\HttpMethodParamsInterface-'));
$is_singleton = false;
return $instance;