<?php
namespace Khigashiguchi\BearSundayWeekday\Resource\App;

use BEAR\Resource\ResourceObject;

class Weekday extends ResourceObject
{
	public function onGet(int $year, int $month, int $day) : ResourceObject
	{
		$date = \Datetime::createFromFormat('Y-m-d', "$year-$month-$day");
		$this->body = [
			'weekday' => $date->format('D')
		];

		return $this;
	}
}