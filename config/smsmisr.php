<?php

return [
    'username'    => env('SMSMISR_USERNAME'),
    'password'    => env('SMSMISR_PASSWORD'),
    'sender'      => env('SMSMISR_SENDER'),
    'environment' => env('SMSMISR_ENVIRONMENT', '1'), // 1=production, 2=test
];
