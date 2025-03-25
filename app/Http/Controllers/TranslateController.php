<?php

namespace App\Http\Controllers;

use App\Services\GoogleTranslateService;

class TranslateController extends Controller
{
    protected $translateService;

    public function __construct(GoogleTranslateService $translateService)
    {
        $this->translateService = $translateService;
    }

    public function translateText()
    {
        $text = "Hello, how are you?"; // teks yang ingin diterjemahkan
        $translatedText = $this->translateService->translate($text, 'id'); // 'id' untuk Bahasa Indonesia

        return response()->json([
            'original' => $text,
            'translated' => $translatedText,
        ]);
    }
}