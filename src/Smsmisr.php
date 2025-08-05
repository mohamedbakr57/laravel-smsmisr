<?php

namespace Bakr\Smsmisr;

use Illuminate\Support\Facades\Http;

class Smsmisr
{
    protected string $username;
    protected string $password;
    protected string $sender;
    protected string $environment;

    public function __construct()
    {
        $this->username = config('smsmisr.username');
        $this->password = config('smsmisr.password');
        $this->sender = config('smsmisr.sender');
        $this->environment = config('smsmisr.environment', '1');
    }

    public function send(string $message, array|string $mobiles, int $language = 1, ?string $delayUntil = null): array
    {
        $mobiles = is_array($mobiles) ? implode(',', $mobiles) : $mobiles;

        $data = [
            'username'    => $this->username,
            'password'    => $this->password,
            'language'    => $language,
            'sender'      => $this->sender,
            'mobile'      => $mobiles,
            'message'     => urlencode($message),
            'environment' => $this->environment,
        ];

        if ($delayUntil) {
            $data['DelayUntil'] = $delayUntil;
        }

        try {
            $response = Http::asForm()->post('https://smsmisr.com/api/SMS/', $data);
            return $response->json();
        } catch (\Throwable $e) {
            return ['error' =]()
