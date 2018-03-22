<?php

namespace Ray\Di\Compiler;

$instance = new \BEAR\Streamer\StreamRenderer($singleton('BEAR\\Resource\\RenderInterface-'), $singleton('BEAR\\Streamer\\StreamerInterface-'));
$is_singleton = false;
return $instance;