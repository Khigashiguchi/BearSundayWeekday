<?php

namespace Ray\Di\Compiler;

$instance = new \BEAR\Resource\Invoker($singleton('BEAR\\Resource\\NamedParameterInterface-'), $prototype('BEAR\\Resource\\RenderInterface-options'));
$is_singleton = false;
return $instance;