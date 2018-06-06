<?php

namespace FirstData\ApiClient;


/**
 * Class RequestUtil
 *
 * @Category Class
 * @package FirstData\ApiClient
 * @author brandon.garcia@firstdata.com
 */
class RequestUtil
{
    /**
     * @return int
     */
    public static function timestamp()
    {
        return time();
    }

    /**
     * @param $apiSecret
     * @param $apiKey
     * @param $clientRequestId
     * @param $timestamp
     * @return string
     */
    public static function messageSignature($apiSecret, $apiKey, $clientRequestId, $timestamp)
    {
        return \hash_hmac('sha256', $apiKey . $clientRequestId . $timestamp, $apiSecret);
    }

    /**
     * @return string
     * @throws \Exception  If an appropriate source of randomness cannot be found. (http://php.net/manual/en/function.random-bytes.php)
     */
    public static function uuid()
    {
        $data = random_bytes(16);
        $data[6] = \chr(\ord($data[6]) & 0x0f | 0x40); // set version to 0100
        $data[8] = \chr(\ord($data[8]) & 0x3f | 0x80); // set bits 6-7 to 10
        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    }
}