<?php

namespace FirstData\FirstApi\Client\Simple;

class MessageSignature
{
    public static function generate($secretKey, $msg)
    {
        $signature = \hash_hmac('sha256', $msg, $secretKey);
        return \base64_encode($signature);
    }
}

