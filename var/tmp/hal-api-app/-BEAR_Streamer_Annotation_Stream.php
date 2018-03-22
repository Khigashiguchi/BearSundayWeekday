<?php

namespace Ray\Di\Compiler;

$instance = new \BEAR\Streamer\StreamProvider();
$is_singleton = true;
return $instance->get();