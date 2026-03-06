# YEB AstrologyAPI

PHP SDK for the YEB Astrology API. Natal charts, planetary positions, transits, synastry and moon data.

Works standalone (plain PHP) or with Laravel (Facade + auto-discovery).

## Requirements

- PHP 8.1+
- cURL extension
- [YEB API Key](https://yeb.to) (free tier available)

## Installation

```bash
composer require yebto/astrology-api
```

## Standalone Usage

```php
use Yebto\AstrologyAPI\AstrologyAPI;

$api = new AstrologyAPI(['key' => 'your-api-key']);
$result = $api->natalChart('example', 'example', 'example');
```

## Laravel Usage

Add your API key to `.env`:

```
YEB_KEY_ID=your-api-key
```

Use via Facade:

```php
use AstrologyAPI;

$result = AstrologyAPI::natalChart('example', 'example', 'example');
```

Or via dependency injection:

```php
use Yebto\AstrologyAPI\AstrologyAPI;

public function handle(AstrologyAPI $api)
{
    $result = $api->natalChart('example', 'example', 'example');
}
```

### Publish Config

```bash
php artisan vendor:publish --tag=yebto-astrology-config
```

## Available Methods

| Method | Description |
|--------|-------------|
| `natalChart($birth_date, $birth_time, $location)` | Generate a natal birth chart |
| `planetaryPositions()` | Get current planetary positions |
| `dailyTransit($sign)` | Get daily transit reading |
| `weeklyTransit($sign)` | Get weekly transit reading |
| `monthlyTransit($sign)` | Get monthly transit reading |
| `natalDailyTransit($birth_date)` | Get personalized daily transit based on natal chart |
| `natalWeeklyTransit($birth_date)` | Get personalized weekly transit based on natal chart |
| `lifeForecast($birth_date)` | Get a comprehensive life forecast |
| `synastry($person1_birth_date, $person2_birth_date)` | Compare two natal charts for relationship compatibility |
| `moonPhase()` | Get current moon phase data |
| `lunarMetrics()` | Get detailed lunar metrics |
| `moonCalendar()` | Get a moon phase calendar |


All methods accept an optional `$extra` array parameter for additional API options.

## Error Handling

```php
use Yebto\ApiClient\Exceptions\ApiException;
use Yebto\ApiClient\Exceptions\AuthenticationException;
use Yebto\ApiClient\Exceptions\RateLimitException;

try {
    $result = $api->natalChart('example', 'example', 'example');
} catch (AuthenticationException $e) {
    // Missing or invalid API key (401)
} catch (RateLimitException $e) {
    // Too many requests (429)
} catch (ApiException $e) {
    echo $e->getMessage();
    echo $e->getHttpCode();
}
```

## Free API Access

Register at [yeb.to](https://yeb.to) with Google OAuth to get a free API key.

## Support

- Documentation: [docs.yeb.to](https://docs.yeb.to)
- Email: support@yeb.to
- Issues: [GitHub Issues](https://github.com/yebto/astrology-api/issues)

## License

MIT - NETOX Ltd.
