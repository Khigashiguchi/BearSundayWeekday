<?php

namespace Ray\Di\Compiler;

$instance = new \BEAR\Resource\NamedParameter($singleton('Doctrine\\Common\\Cache\\Cache-'), $singleton('Doctrine\\Common\\Annotations\\Reader-'), $injector(), array());
$is_singleton = true;
return $instance;