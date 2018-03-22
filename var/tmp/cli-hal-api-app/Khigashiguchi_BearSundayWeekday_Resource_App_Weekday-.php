<?php

namespace Ray\Di\Compiler;

$instance = new \Khigashiguchi\BearSundayWeekday\Resource\App\Weekday();
$instance->setRenderer($singleton('BEAR\\Resource\\RenderInterface-'));
$is_singleton = false;
return $instance;