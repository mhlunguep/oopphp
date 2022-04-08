<?php

class Calendar
{
    public $name;
    private const MONTH_IN_YEAR = 12;

    public static $daysInFebruary = 28;

    public static $count = 0;

    public function __construct() 
    {
        self::$count++;
    }

    public function getMonthsInYear()
    {
        return self::MONTH_IN_YEAR;
    }
}

$calendar = new Calendar();
$calendar2 = new Calendar();

$calendar->name = 'Year Planner';

print $calendar->name . '<br>';
print $calendar->getMonthsInYear() . '<br>';
print $calendar::$daysInFebruary . '<br>';
$calendar::$daysInFebruary++;

print $calendar::$daysInFebruary . '<br>';

print $calendar::$count  . '<br>';