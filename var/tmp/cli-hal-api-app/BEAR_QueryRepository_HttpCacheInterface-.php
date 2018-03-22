<?php

namespace Ray\Di\Compiler;

$instance = new \BEAR\QueryRepository\HttpCache($singleton('Doctrine\\Common\\Cache\\CacheProvider-BEAR\\RepositoryModule\\Annotation\\Storage'));
$is_singleton = false;
return $instance;