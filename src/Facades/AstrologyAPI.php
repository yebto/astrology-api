<?php

namespace Yebto\AstrologyAPI\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static array natalChart(string $birth_date, string $birth_time, string $location, array $extra = [])
 * @method static array planetaryPositions(array $extra = [])
 * @method static array dailyTransit(string $sign, array $extra = [])
 * @method static array weeklyTransit(string $sign, array $extra = [])
 * @method static array monthlyTransit(string $sign, array $extra = [])
 * @method static array natalDailyTransit(string $birth_date, array $extra = [])
 * @method static array natalWeeklyTransit(string $birth_date, array $extra = [])
 * @method static array lifeForecast(string $birth_date, array $extra = [])
 * @method static array synastry(string $person1_birth_date, string $person2_birth_date, array $extra = [])
 * @method static array moonPhase(array $extra = [])
 * @method static array lunarMetrics(array $extra = [])
 * @method static array moonCalendar(array $extra = [])
 */
class AstrologyAPI extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'yebto-astrology';
    }
}
