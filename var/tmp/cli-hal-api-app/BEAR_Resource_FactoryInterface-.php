<?php

namespace Ray\Di\Compiler;

$instance = new \BEAR\Resource\Factory($prototype('BEAR\\Resource\\SchemeCollectionInterface-', array('BEAR\\Resource\\Factory', '__construct', 'scheme')));
$instance->setSchemeCollection($prototype('BEAR\\Resource\\SchemeCollectionInterface-', array('BEAR\\Resource\\Factory', 'setSchemeCollection', 'scheme')));
$is_singleton = false;
return $instance;