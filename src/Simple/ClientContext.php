<?php
/**
 * Created by PhpStorm.
 * User: bgarcia
 * Date: 9/11/18
 * Time: 12:01 PM
 */

namespace FirstData\FirstApi\Client\Simple;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use FirstData\FirstApi\Client\Configuration;
use FirstData\FirstApi\Client\HeaderSelector;

/**
 * Class ClientContext
 * @package FirstData\FirstApi\Client\Simple
 */
class ClientContext
{
    /**
     * @param MerchantCredentials $creds
     * @return ClientContext
     */
    public static function create(MerchantCredentials $creds)
    {
        return new self(new Client(), new Configuration(), new HeaderSelector(), $creds);
    }

    /** @var  ClientInterface */
    private $client;

    /** @var  Configuration */
    private $config;

    /** @var  HeaderSelector */
    private $selector;

    /** @var  MerchantCredentials */
    private $credentials;

    /**
     * ClientContext constructor.
     * @param ClientInterface $client
     * @param Configuration $config
     * @param HeaderSelector $selector
     * @param MerchantCredentials $credentials
     */
    public function __construct(
        ClientInterface $client,
        Configuration $config,
        HeaderSelector $selector,
        MerchantCredentials $credentials
    ) {
        $this->client = $client;
        $this->config = $config;
        $this->selector = $selector;
        $this->credentials = $credentials;
    }

    /**
     * @return ClientInterface
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * @return HeaderSelector
     */
    public function getSelector()
    {
        return $this->selector;
    }

    /**
     * @return MerchantCredentials
     */
    public function getCredentials()
    {
        return $this->credentials;
    }
}