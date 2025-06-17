<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class GoogleTranslateService
{
    protected $apiKey;
    protected $apiUrl;

    public function __construct()
    {
        $this->apiKey = env('GOOGLE_TRANSLATE_API_KEY'); // ambil API key dari file .env
        $this->apiUrl = 'https://translation.googleapis.com/language/translate/v2';
    }

    public function translate($text, $targetLang = 'id')
    {
        $response = Http::post($this->apiUrl, [
            'q' => $text,
            'target' => $targetLang,
            'key' => $this->apiKey,
        ]);

        if ($response->successful()) {
            return $response->json()['data']['translations'][0]['translatedText'];
        }

        return null;
    }
}