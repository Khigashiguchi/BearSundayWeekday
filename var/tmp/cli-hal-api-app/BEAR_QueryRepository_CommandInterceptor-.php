<?php

namespace Ray\Di\Compiler;

$instance = new \BEAR\QueryRepository\CommandInterceptor($prototype('-BEAR\\RepositoryModule\\Annotation\\Commands', array('BEAR\\QueryRepository\\CommandInterceptor', '__construct', 'commands')));
$is_singleton = true;
return $instance;