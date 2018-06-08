<?php

namespace FirstData\ApiClient;

use Ramsey\Uuid\Uuid;


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
        return Uuid::uuid4()->toString();
    }
}