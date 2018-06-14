<?php

namespace FirstData\ApiClient\Api;

use FirstData\ApiClient\RequestUtil;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use FirstData\ApiClient\ApiException;
use FirstData\ApiClient\Configuration;
use FirstData\ApiClient\ObjectSerializer;
use FirstData\ApiClient\Model\TransactionResponse;
use FirstData\ApiClient\Model\CertificateCreationResponse;

/**
 * Class PaymentApi
 *
 * @category Class
 * @package  FirstData\ApiClient
 * @author brandon.garcia@firstdata.com
 */
class PaymentApi
{
    const MIME_JSON = 'application/json';

    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var string
     */
    private $contentType;

    /**
     * @var string
     */
    private $apiSecret;

    /**
     * @var string
     */
    private $apiKey;

    /**
     * @param string $apiSecret
     * @param string $apiKey Developer App API key. This is used for API authentication. Keys are provided at the time of merchant boarding. (required)
     * @return PaymentApi
     */
    public static function create($apiSecret, $apiKey)
    {
        return new self(new Client(), new Configuration(), self::MIME_JSON, $apiSecret, $apiKey);
    }

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param string $contentType
     * @param string $apiSecret
     * @param string $apiKey
     */
    public function __construct(ClientInterface $client, Configuration $config, $contentType, $apiSecret, $apiKey) {
        $this->client = $client;
        $this->config = $config;
        $this->contentType = $contentType;
        $this->apiSecret = $apiSecret;
        $this->apiKey = $apiKey;
    }

    /**
     * Operation postAuthTransaction
     *
     * Postauth transaction
     *
     * @param  string $transactionId Identifies the primary transaction (required)
     * @param  \FirstData\ApiClient\Model\SecondaryTransaction $payload payload (required)
     *
     * @throws \RuntimeException
     * @throws \LogicException
     * @throws \FirstData\ApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @throws \Exception
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @return \FirstData\ApiClient\Model\CertificateCreationResponse
     */
    public function postAuthTransaction($transactionId, $payload)
    {
        // verify the required parameter 'transactionId' is set
        if ($transactionId === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $transactionId when calling postAuthTransaction'
            );
        }
        // verify the required parameter 'payload' is set
        if ($payload === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payload when calling postAuthTransaction'
            );
        }

        $fullPath = $this->expandPath('/payments/%s/postauth', [$transactionId]);

        try {
            return $this->request('POST', $fullPath, CertificateCreationResponse::class, $payload);
        } catch (ApiException $e) {
            $className = null;
            if ($e->getCode() == 200) {
                $className = CertificateCreationResponse::class;
            } elseif (\in_array($e->getCode(), [400, 401, 403, 404, 409, 422, 500, 502])) {
                $className = TransactionResponse::class;
            }
            if (null !== $className) {
                $e->setResponseObject(ObjectSerializer::deserialize(
                    $e->getResponseBody(),
                    $className,
                    $e->getResponseHeaders()
                ));
            }
            throw $e;
        }
    }

    /**
     * Operation refundTransaction
     *
     * Return/Refund transaction
     *
     * @param  string $transactionId Identifies the primary transaction (required)
     * @param  \FirstData\ApiClient\Model\SecondaryTransaction $payload payload (required)
     *
     * @throws \RuntimeException
     * @throws \LogicException
     * @throws \FirstData\ApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @throws \Exception
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @return \FirstData\ApiClient\Model\TransactionResponse
     */
    public function refundTransaction($transactionId, $payload)
    {
        // verify the required parameter 'transactionId' is set
        if ($transactionId === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $transactionId when calling refundTransaction'
            );
        }
        // verify the required parameter 'payload' is set
        if ($payload === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payload when calling refundTransaction'
            );
        }

        $fullPath = $this->expandPath('/payments/%s/return', [$transactionId]);

        try {
            return $this->request('POST', $fullPath, TransactionResponse::class, $payload);
        } catch (ApiException $e) {
            if (\in_array($e->getCode(), [200, 400, 401, 403, 404, 409, 422, 500, 502])) {
                $e->setResponseObject(ObjectSerializer::deserialize(
                    $e->getResponseBody(),
                    TransactionResponse::class,
                    $e->getResponseHeaders()
                ));
            }
            throw $e;
        }
    }

    /**
     * Operation voidTransaction
     *
     * Void transaction
     *
     * @param  string $transactionId Identifies the primary transaction (required)
     *
     * @throws \RuntimeException
     * @throws \LogicException
     * @throws \FirstData\ApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @throws \Exception
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @return \FirstData\ApiClient\Model\TransactionResponse
     */
    public function voidTransaction($transactionId)
    {
        // verify the required parameter 'transactionId' is set
        if ($transactionId === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $transactionId when calling voidTransaction'
            );
        }

        $fullPath = $this->expandPath('/payments/%s/void', [$transactionId]);

        try {
            return $this->request('POST', $fullPath, TransactionResponse::class);
        } catch (ApiException $e) {
            if (\in_array($e->getCode(), [200, 400, 401, 403, 404, 409, 422, 500, 502])) {
                $e->setResponseObject(ObjectSerializer::deserialize(
                    $e->getResponseBody(),
                    TransactionResponse::class,
                    $e->getResponseHeaders()
                ));
            }
            throw $e;
        }
    }

    /**
     * Operation createTransaction
     *
     * Primary transaction creation
     *
     * @param  \FirstData\ApiClient\Model\PrimaryTransaction $payload Primary Transaction request (required)
     *
     * @throws \RuntimeException
     * @throws \LogicException
     * @throws \FirstData\ApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @throws \Exception
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @return \FirstData\ApiClient\Model\TransactionResponse
     */
    public function createTransaction($payload)
    {
        // verify the required parameter 'payload' is set
        if ($payload === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payload when calling createTransaction'
            );
        }

        $fullPath = $this->expandPath('/payments');

        try {
            return $this->request('POST', $fullPath, TransactionResponse::class, $payload);
        } catch (ApiException $e) {
            if (\in_array($e->getCode(), [200, 400, 401, 403, 404, 409, 422, 500, 502])) {
                $e->setResponseObject(ObjectSerializer::deserialize(
                    $e->getResponseBody(),
                    TransactionResponse::class,
                    $e->getResponseHeaders()
                ));
            }
            throw $e;
        }
    }

    /**
     * @param $path
     * @param array $params
     * @return string
     */
    private function expandPath($path, array $params = [])
    {
        $serializedParams = \array_map('\FirstData\ApiClient\ObjectSerializer::toPathValue', $params);
        $newPath = (null === $params) ? $path : sprintf($path, ...$serializedParams);
        return $this->config->getHost() . $newPath;
    }

    /**
     * @param $method
     * @param $path
     * @param $returnClass
     * @param mixed $payload
     * @return mixed
     * @throws \LogicException
     * @throws \InvalidArgumentException
     * @throws \RuntimeException
     * @throws ApiException
     * @throws \Exception
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    private function request($method, $path, $returnClass, $payload = null)
    {
        $timestamp = RequestUtil::timestamp();
        $clientRequestId = RequestUtil::uuid();
        $messageSignature = RequestUtil::messageSignature($this->apiSecret, $this->apiKey, $clientRequestId, $timestamp);

        $headers = [
            'Content-Type' => $this->contentType,
            'Api-Key' => $this->apiKey,
            'Client-Request-Id' => $clientRequestId,
            'Timestamp' => $timestamp,
            'Message-Signature' => $messageSignature,
            'Accept' => self::MIME_JSON,
            'User-Agent' => $this->config->getUserAgent()
        ];

        // for model (json/xml)
        // \stdClass has no __toString(), so we should encode it manually
        if (null !== $payload && $payload instanceof \stdClass && $this->contentType === self::MIME_JSON) {
            $serializedPayload = \GuzzleHttp\json_encode($payload);
        } else {
            $serializedPayload = '';
        }

        $request = new Request($method, $path, $headers, $serializedPayload);

        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'ab');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        try {
            $response = $this->client->send($request, $options);
        } catch (RequestException $e) {
            throw new ApiException(
                "[{$e->getCode()}] {$e->getMessage()}",
                $e->getCode(),
                $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
            );
        }

        $statusCode = $response->getStatusCode();

        if ($statusCode < 200 || $statusCode > 299) {
            throw new ApiException(
                sprintf(
                    '[%d] Error connecting to the API (%s)',
                    $statusCode,
                    $request->getUri()
                ),
                $statusCode,
                $response->getHeaders(),
                $response->getBody()
            );
        }

        $jsonContent = $response->getBody()->getContents();
        return ObjectSerializer::deserialize(\json_decode($jsonContent), $returnClass, []);
    }
}
