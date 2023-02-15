<?php

/**
 * Crypt Helper.
 *
 * Updated  2022
 *
 */

namespace App\Helpers;

class CryptHelper{
    public $cipher = "AES-128-CBC";
    public $secret = "12345678901234567890123456789012";
    public $options = 0;

    public static function encrypt($text_encrypt)
    {
        $information = $text_encrypt;
        $cipher = "AES-128-CBC";
        $secret = "12345678901234567890123456789012";
        $options = 0;
        $iv = str_repeat("0",openssl_cipher_iv_length($cipher));
        $encryptedString = openssl_encrypt($information, $cipher, $secret, $options, $iv);
        return strval($encryptedString);
    }

    public static function decrypt($text_decrypt)
    {
        $information = $text_decrypt;
        $cipher = "AES-128-CBC";
        $secret = "12345678901234567890123456789012";
        $options = 0;
        $iv = str_repeat("0",openssl_cipher_iv_length($cipher));
        $decryptedString = openssl_decrypt($information, $cipher, $secret, $options, $iv);
        return strval($decryptedString);
    }
}
