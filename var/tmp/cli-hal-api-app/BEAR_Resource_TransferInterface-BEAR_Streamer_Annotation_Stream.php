<?php

namespace Ray\Di\Compiler;

$instance = new \BEAR\Streamer\StreamResponder($singleton('BEAR\\Streamer\\StreamerInterface-'));
$is_singleton = false;
return $instance;