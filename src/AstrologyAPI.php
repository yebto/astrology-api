<?php

namespace Yebto\AstrologyAPI;

use Yebto\ApiClient\YebtoClient;

class AstrologyAPI extends YebtoClient
{
    protected function module(): string
    {
        return 'astrology';
    }

    protected function defaults(): array
    {
        return [
            'base_url' => 'https://api.yeb.to/v1',
            'key'      => null,
            'curl'     => [
                CURLOPT_TIMEOUT        => 30,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_HTTPHEADER     => ['Content-Type: application/json'],
                CURLOPT_USERAGENT      => 'yebto-astrology-api-php',
            ],
        ];
    }

    /**
     * Generate a natal birth chart
     */
    public function natalChart(string $birth_date, string $birth_time, string $location, array $extra = []): array
    {
        return $this->post('natal-chart', array_merge(compact('birth_date', 'birth_time', 'location'), $extra));
    }

    /**
     * Get current planetary positions
     */
    public function planetaryPositions(array $extra = []): array
    {
        return $this->post('planetary-positions', $extra);
    }

    /**
     * Get daily transit reading
     */
    public function dailyTransit(string $sign, array $extra = []): array
    {
        return $this->post('daily-transit', array_merge(compact('sign'), $extra));
    }

    /**
     * Get weekly transit reading
     */
    public function weeklyTransit(string $sign, array $extra = []): array
    {
        return $this->post('weekly-transit', array_merge(compact('sign'), $extra));
    }

    /**
     * Get monthly transit reading
     */
    public function monthlyTransit(string $sign, array $extra = []): array
    {
        return $this->post('monthly-transit', array_merge(compact('sign'), $extra));
    }

    /**
     * Get personalized daily transit based on natal chart
     */
    public function natalDailyTransit(string $birth_date, array $extra = []): array
    {
        return $this->post('natal-daily-transit', array_merge(compact('birth_date'), $extra));
    }

    /**
     * Get personalized weekly transit based on natal chart
     */
    public function natalWeeklyTransit(string $birth_date, array $extra = []): array
    {
        return $this->post('natal-weekly-transit', array_merge(compact('birth_date'), $extra));
    }

    /**
     * Get a comprehensive life forecast
     */
    public function lifeForecast(string $birth_date, array $extra = []): array
    {
        return $this->post('life-forecast', array_merge(compact('birth_date'), $extra));
    }

    /**
     * Compare two natal charts for relationship compatibility
     */
    public function synastry(string $person1_birth_date, string $person2_birth_date, array $extra = []): array
    {
        return $this->post('synastry', array_merge(compact('person1_birth_date', 'person2_birth_date'), $extra));
    }

    /**
     * Get current moon phase data
     */
    public function moonPhase(array $extra = []): array
    {
        return $this->post('moon-phase', $extra);
    }

    /**
     * Get detailed lunar metrics
     */
    public function lunarMetrics(array $extra = []): array
    {
        return $this->post('lunar-metrics', $extra);
    }

    /**
     * Get a moon phase calendar
     */
    public function moonCalendar(array $extra = []): array
    {
        return $this->post('moon-calendar', $extra);
    }
}
