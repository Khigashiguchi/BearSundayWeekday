<?php
namespace Khigashiguchi\BearSundayWeekday\Resource\App;

use BEAR\Resource\ResourceObject;
use Psr\Log\LoggerInterface;
use Khigashiguchi\BearSundayWeekday\Annotation\BenchMark;

class Weekday extends ResourceObject
{
	/**
	 * @var LoggerInterface
	 */
	private $logger;

	public function __construct(LoggerInterface $logger)
	{
		$this->logger = $logger;
	}

	/**
	 * @BenchMark
	 */
	public function onGet(int $year, int $month, int $day) : ResourceObject
	{
		$weekday = \Datetime::createFromFormat('Y-m-d', "$year-$month-$day")->format('D');
		$this->body = [
			'weekday' => $weekday
		];
		$this->logger->info("$year-$month-$day {$weekday}");

		return $this;
	}
}