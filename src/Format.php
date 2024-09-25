<?php

namespace Text;

class Format {
    public static function upperText(string $value) {
        return strtoupper($value);
    }

    public static function lowerText(string $value) {
        return strtolower($value);
    }
}