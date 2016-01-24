<?php namespace App\Utilities;

use Carbon\Carbon;

class Dates {
	
	/**
	 * Coverts date from DB format to EU format
	 *
	 * @param string $date (ex. YYYY-MM-DD)
	 *
	 * @return string
	 */
	public static function convertToEUFormat($date)
	{
		$pos = strpos($date, ' ');
		if ($pos !== false) $date = substr($date, 0, $pos);
		$carbonDate = explode('-', $date);
		$carbonDate = Carbon::create($carbonDate[0], $carbonDate[1], $carbonDate[2]);
		return $carbonDate->format('d/m/Y');
	}
	
	
	/**
	 * Coverts datetime from DB format to EU format
	 *
	 * @param string $datetime (ex. YYYY-MM-DD HH:MM:SS)
	 *
	 * @return string
	 */
	public static function convertToEUDatetimeFormat($datetime, $showSeconds = true)
	{
		$pieces = explode(' ', $datetime);
		$time = $pieces[1];
		if ($showSeconds == false) $time = substr($time, 0, -3);
		return Dates::convertToEUFormat($pieces[0]).' '.$time;
	}
	
	
	/**
	 * Coverts date from EU format to DB format
	 *
	 * @param string $date (ex. DD/MM/YYYY)
	 *
	 * @return string
	 */
	public static function convertToDbFormat($date)
	{
		$carbonDate = explode('/', $date);
		$carbonDate = Carbon::create($carbonDate[2], $carbonDate[1], $carbonDate[0]);
		return $carbonDate->format('Y-m-d');
	}
	
	
	/**
	 * Coverts datetime from EU format to DB format
	 *
	 * @param string $datetime (ex. DD/MM/YYYY HH:MM:SS)
	 *
	 * @return string
	 */
	public static function convertDatetimeToDbFormat($datetime)
	{
		$pieces = explode(' ', $datetime);
		$time = $pieces[1];
		return Dates::convertToDbFormat($pieces[0]).' '.$time;
	}
	
}