# Laravel SMSMisr

A modern Laravel package to send SMS messages using [SMSMisr](https://smsmisr.com/) API. Supports bulk sending, delayed delivery, and Arabic/English content — powered by Laravel's HTTP client.

---

## 🚀 Installation

```bash
composer require bakr/smsmisr

✅ Requirements
PHP >= 8.1

Laravel >= 9.x

Laravel HTTP client (built-in from Laravel 7.x)

A valid SMSMisr account

⚙️ Configuration
Publish the config file:
php artisan vendor:publish --tag=smsmisr-config

This will create config/smsmisr.php. Fill in your credentials:

return [
    'username'    => env('SMSMISR_USERNAME'),
    'password'    => env('SMSMISR_PASSWORD'),
    'sender'      => env('SMSMISR_SENDER'),
    'environment' => env('SMSMISR_ENVIRONMENT', '1'), // 1 = production, 0 = test
];

SMSMISR_USERNAME=your_username
SMSMISR_PASSWORD=your_password
SMSMISR_SENDER=your_sender_id
SMSMISR_ENVIRONMENT=1

✉️ Usage Examples

🔹 Send SMS (single or multiple numbers)

use Bakr\Smsmisr\Facades\Smsmisr;

$response = Smsmisr::send(
    'Your verification code is 123456',
    ['201234567890', '201098765432'],
    2 // Arabic = 2, English = 1
);

🔹 Delayed SMS

$response = Smsmisr::send(
    'This is a delayed message',
    '201234567890',
    1,
    '2025-12-31 23:59:00'
);

🔹 Check balance
$response = Smsmisr::balance();

📦 Publishable Assets

Config file: php artisan vendor:publish --tag=smsmisr-config

📄 License

This package is open-sourced software licensed under the MIT license.

🤝 Contributing
Feel free to submit issues or PRs. Contributions are welcome and appreciated!

🌐 Author
Developed by Bakr.

