<?php

namespace Ray\Di\Compiler;

$instance = new \Khigashiguchi\BearSundayWeekday\Resource\Page\Index();
$instance->setRenderer($singleton('BEAR\\Resource\\RenderInterface-'));
$is_singleton = false;
return $instance;