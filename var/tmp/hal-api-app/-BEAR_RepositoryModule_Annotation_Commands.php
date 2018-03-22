<?php

namespace Ray\Di\Compiler;

$instance = new \BEAR\QueryRepository\CommandsProvider($singleton('BEAR\\QueryRepository\\QueryRepositoryInterface-'), $singleton('Doctrine\\Common\\Annotations\\Reader-'), $singleton('BEAR\\Resource\\ResourceInterface-'));
$is_singleton = false;
return $instance->get();