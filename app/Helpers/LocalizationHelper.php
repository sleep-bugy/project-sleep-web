<?php

// app/Helpers/LocalizationHelper.php
if (!function_exists('getFlagEmoji')) {
    function getFlagEmoji($countryCode) {
        if (!$countryCode || strlen($countryCode) !== 2) return '🌐';
        
        $countryCode = strtoupper($countryCode);
        $ordA = 0x1F1E6; // Regional Indicator A
        $ordZ = 0x1F1FF; // Regional Indicator Z
        
        $letters = str_split($countryCode);
        $flagChars = [];
        
        foreach ($letters as $letter) {
            $ord = ord($letter) - ord('A') + $ordA;
            $flagChars[] = mb_chr($ord, 'UTF-8');
        }
        
        return implode('', $flagChars);
    }
}