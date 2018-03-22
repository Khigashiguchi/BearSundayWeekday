<?php

namespace Ray\Di\Compiler;

$instance = new \BEAR\Resource\Module\SchemeCollectionProvider('Khigashiguchi\\BearSundayWeekday', $injector());
$is_singleton = false;
return $instance->get();