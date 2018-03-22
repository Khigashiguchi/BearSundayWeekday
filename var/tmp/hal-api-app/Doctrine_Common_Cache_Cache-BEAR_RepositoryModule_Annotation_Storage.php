<?php

namespace Ray\Di\Compiler;

$instance = new \BEAR\QueryRepository\StorageProvider($singleton('Doctrine\\Common\\Cache\\CacheProvider-BEAR\\RepositoryModule\\Annotation\\Storage'), 'Khigashiguchi\\BearSundayWeekday', '');
$is_singleton = true;
return $instance->get();