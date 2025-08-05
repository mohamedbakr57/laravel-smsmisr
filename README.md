# 📲 Laravel SMSMisr

A modern and lightweight Laravel package to send SMS messages via [SMSMisr](https://smsmisr.com/) — simple, flexible, and built using Laravel's native HTTP client.

Send bulk SMS, schedule messages, and handle Arabic/English content with ease. 💬

---

## 📦 Installation

Install the package via Composer:

```bash
composer require bakr/smsmisr
Publish the config file (optional):

bash

php artisan vendor:publish --tag=smsmisr-config
📋 Requirements
PHP >= 8.1

Laravel >= 9.x

SMSMisr account & credentials

Laravel HTTP client (built-in)

⚙️ Configuration
Add your credentials to .env:

env

SMSMISR_USERNAME=your_username
SMSMISR_PASSWORD=your_password
SMSMISR_SENDER=your_sender_id
SMSMISR_ENVIRONMENT=1 # 1 = production, 0 = test
Optionally, publish and edit the configuration:


php artisan vendor:publish --tag=smsmisr-config
This will create a file at: config/smsmisr.php.

✉️ Usage Examples
✅ Send SMS

use Bakr\Smsmisr\Facades\Smsmisr;

Smsmisr::send(
    'Hello from Laravel 🎉',
    '201234567890'
);
✅ Send to Multiple Recipients
php
Copy
Edit
Smsmisr::send(
    'Big update 🚀',
    ['201234567890', '201098765432']
);
🕐 Schedule SMS (Delayed)

Smsmisr::send(
    'Happy New Year 🎊',
    '201234567890',
    1, // English
    '2025-12-31 23:59:00'
);
💰 Check Balance

$response = Smsmisr::balance();
🧪 Testing
Use Laravel’s HTTP fakes:


use Illuminate\Support\Facades\Http;

Http::fake();

Smsmisr::send('Test message', '201234567890');

// Assert the request was made
Http::assertSent(...);
🛠 Advanced
You can override the default environment (test vs production) using:


config(['smsmisr.environment' => '0']); // Test mode
🧾 License
MIT License


MIT License

Copyright (c) 2025 Bakr

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction...

(Include full MIT license text in LICENSE file)
🤝 Contributing
Pull requests are welcome! ❤️
For major changes, please open an issue first to discuss what you'd like to change.

👤 Author
Bakr
GitHub: github.com/bakr

🔗 Links
📘 SMSMisr API Documentation

🐙 GitHub Repo

📦 Packagist Package

Thanks for using Laravel SMSMisr! ✨


---

