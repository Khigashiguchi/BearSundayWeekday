<?php

namespace Ray\Di\Compiler;

$instance = new \BEAR\Streamer\Streamer($singleton('-BEAR\\Streamer\\Annotation\\Stream', array('BEAR\\Streamer\\Streamer', '__construct', 'stream')));
$is_singleton = true;
return $instance;