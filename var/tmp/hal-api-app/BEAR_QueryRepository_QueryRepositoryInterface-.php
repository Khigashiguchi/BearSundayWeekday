<?php

namespace Ray\Di\Compiler;

$instance = new \BEAR\QueryRepository\QueryRepository($singleton('BEAR\\QueryRepository\\EtagSetterInterface-'), $singleton('Doctrine\\Common\\Cache\\Cache-BEAR\\RepositoryModule\\Annotation\\Storage', array('BEAR\\QueryRepository\\QueryRepository', '__construct', 'kvs')), $singleton('Doctrine\\Common\\Annotations\\Reader-'), array('short' => 60, 'medium' => 3600, 'long' => 86400, 'never' => 0));
$is_singleton = true;
return $instance;