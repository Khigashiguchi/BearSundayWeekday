<?php

namespace Ray\Di\Compiler;

$instance = new \BEAR\Package\Provide\Representation\HalRenderer($singleton('Doctrine\\Common\\Annotations\\Reader-'), $prototype('BEAR\\Package\\Provide\\Representation\\HalLink-'));
$is_singleton = true;
return $instance;