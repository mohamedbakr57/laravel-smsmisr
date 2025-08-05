# Laravel SMSMisr 📲

[![Latest Version on Packagist](https://img.shields.io/packagist/v/bakr/smsmisr.svg)](https://packagist.org/packages/bakr/smsmisr)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](LICENSE)
[![Total Downloads](https://img.shields.io/packagist/dt/bakr/smsmisr.svg)](https://packagist.org/packages/bakr/smsmisr)

A modern Laravel package for sending SMS messages using the **SMSMisr** gateway.  
Built with simplicity, flexibility, and modern Laravel practices in mind.

---

## 📚 Table of Contents

- [Features](#-features)
- [Installation](#-installation)
- [Configuration](#-configuration)
- [Usage](#-usage)
  - [Send a Single SMS](#send-a-single-sms)
  - [Send to Multiple Recipients](#send-to-multiple-recipients)
  - [Schedule an SMS](#schedule-an-sms)
- [Requirements](#-requirements)
- [Examples](#-examples)
- [Testing](#-testing)
- [Contributing](#-contributing)
- [License](#-license)
- [Credits](#-credits)

---

## ✨ Features

- 📬 Send single or bulk SMS messages
- ⏱️ Support for scheduling future messages
- 🧾 Laravel Facade support
- 🛡️ Clean and tested codebase
- ✅ Supports Laravel 10+ out of the box
- 🔄 Simple configuration and usage

---

## 📦 Installation

```bash
composer require bakr/smsmisr
```
Laravel 10+ will auto-discover the service provider and facade.


## ⚙️ Configuration
You can publish the config file:

```bash
php artisan vendor:publish --tag=smsmisr-config
```
This will create a config file at config/smsmisr.php:
```bash
return [
    'username'  => env('SMSMISR_USERNAME'),
    'password'  => env('SMSMISR_PASSWORD'),
    'sender_id' => env('SMSMISR_SENDER_ID'),
];
```
Then set your .env:
 ```bash
SMSMISR_USERNAME=your_username
SMSMISR_PASSWORD=your_password
SMSMISR_SENDER_ID=your_sender_id
```
## 🧪 Usage
Send a Single SMS
```bash
use Bakr\Smsmisr\Facades\Smsmisr;

Smsmisr::send('201234567890', 'Your verification code is 123456');
```
Send to Multiple Recipients
```bash 
Smsmisr::send(['201234567890', '201112223334'], 'Promo: 50% off today!');
```
Schedule an SMS
```bash
Smsmisr::schedule('201234567890', 'Happy New Year 🎉', now()->addMinutes(10));
```
## ✅ Requirements
PHP ^8.1

Laravel ^10.0 or newer

No external dependencies (uses Laravel's native HTTP client)

## 💡 Examples
Controller Example:

```php
public function notifyUser(Request $request)
{
    Smsmisr::send($request->phone, 'Welcome to our platform!');
    return response()->json(['status' => 'sent']);
}
```
```php
Smsmisr::schedule('201234567890', 'Don’t miss our event tomorrow!', now()->addDay());
```
## 🤝 Contributing
PRs are welcome! Please open issues first for any breaking or feature discussions.

To contribute locally:

```bash
git clone https://github.com/bakr/smsmisr.git
cd smsmisr
composer install
composer test
```
Make sure your code is clean and tested before submitting a PR.

## 📄 License
This package is open-sourced software licensed under the MIT license.

## 🙌 Credits
Developed with ❤️ by Mohamed Bakr

Inspired by the need for clean SMS integrations in Laravel projects

Built for the community — feel free to star ⭐️ and share

