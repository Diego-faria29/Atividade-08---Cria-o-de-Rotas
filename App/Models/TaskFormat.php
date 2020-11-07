<?php

namespace App\Models;

class TaskFormat
{
	public static function taskListFormat(array &$taskList)
	{
		foreach($taskList as &$task) {
			self::dateFormat($task['term']);
			self::priorityFormat($task['priority']);
			self::finishedFormat($task['complete']);
		}
	}

	public static function dateFormat(&$date)
	{
		$dateTime = new \DateTime($date);

		self::dateEmpty($date);

		if (!empty($date)) {
			$date = $dateTime->format('d/m/Y');
		}
	}

	public static function priorityFormat(&$priority)
	{
		switch ($priority) {
			case 'low':
				$priority = 'Baixo';
				break;
			case 'medium':
				$priority = 'Médio';
				break;
			case 'high':
				$priority = 'Grande';
				break;
		}
	}

	public static function finishedFormat(&$finished)
	{
		if($finished == 1) {
			$finished = 'Sim';
		} else {
			$finished = 'Não';
		}
	}

	private static function dateEmpty(&$date)
	{
		if ($date == '0000-00-00') {
			$date = '';
		}
	}
}



