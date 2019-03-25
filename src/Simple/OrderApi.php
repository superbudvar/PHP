<?php

namespace FirstData\FirstApi\Client\Simple;

use FirstData\FirstApi\Client\ApiException;
use FirstData\FirstApi\Client\Model\ErrorResponse;
use FirstData\FirstApi\Client\Model\OrderResponse;
use FirstData\FirstApi\Client\Model\SecondaryTransaction;
use FirstData\FirstApi\Client\Model\TransactionResponse;
use InvalidArgumentException;

/**
 * Class OrderApi
 * @package FirstData\FirstApi\Client\Simple
 */
class OrderApi extends ApiWrapper
{
    /** @var \FirstData\FirstApi\Client\Api\OrderApi */
    private $client;

    /**
     * OrderApi constructor.
     * @param  ClientContext $context
     */
    public function __construct(ClientContext $context)
    {
        parent::__construct($context);
        $this->client = $this->buildClient(\FirstData\FirstApi\Client\Api\OrderApi::class);
    }

    /**
     * Operation orderInquiry
     *
     * Retrieve the state of an order
     *
     * @param  string $orderId Gateway order identifier as returned in the parameter orderId (required)
     * @param  string $region The region where client wants to process the transaction (optional)
     * @param  string $storeId An optional outlet ID for clients that support multiple stores in the same developer app (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return OrderResponse|ErrorResponse
     */
    public function orderInquiry($orderId, $region = null, $storeId = null)
    {
        $headers = $this->genHeaders();
        return $this->client->orderInquiry(
            $headers->getContentType(),
            $headers->getClientRequestId(),
            $headers->getApiKey(),
            $headers->getTimestamp(),
            $orderId,
            $headers->getMessageSignature(),
            $region ?? $this->getDefaultRegion(),
            $storeId ?? $this->getDefaultStoreId()
        );
    }

    /**
     * Operation orderPostAuth
     *
     * Capture/complete an already existing order.
     *
     * @param  string $orderId Gateway order identifier as returned in the parameter orderId (required)
     * @param  SecondaryTransaction $payload payload (required)
     * @param  string $region The region where client wants to process the transaction (optional)
     * @param  string $storeId An optional outlet ID for clients that support multiple stores in the same developer app (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return TransactionResponse|ErrorResponse
     */
    public function orderPostAuth($orderId, SecondaryTransaction $payload, $region = null, $storeId = null)
    {
        $strPayload = $this->serialize($payload);
        $headers = $this->genHeaders($strPayload);
        return $this->client->orderPostAuth(
            $headers->getContentType(),
            $headers->getClientRequestId(),
            $headers->getApiKey(),
            $headers->getTimestamp(),
            $orderId,
            $payload,
            $headers->getMessageSignature(),
            $region ?? $this->getDefaultRegion(),
            $storeId ?? $this->getDefaultStoreId()
        );
    }

    /**
     * Operation orderReturnTransaction
     *
     * Return/refund an order.
     *
     * @param  string $orderId Gateway order identifier as returned in the parameter orderId (required)
     * @param  SecondaryTransaction $payload payload (required)
     * @param  string $region The region where client wants to process the transaction (optional)
     * @param  string $storeId An optional outlet ID for clients that support multiple stores in the same developer app (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return TransactionResponse|ErrorResponse
     */
    public function orderReturnTransaction($orderId, SecondaryTransaction $payload, $region = null, $storeId = null)
    {
        $strPayload = $this->serialize($payload);
        $headers = $this->genHeaders($strPayload);
        return $this->client->orderReturnTransaction(
            $headers->getContentType(),
            $headers->getClientRequestId(),
            $orderId,
            $payload,
            $region ?? $this->getDefaultRegion(),
            $storeId ?? $this->getDefaultStoreId()
        );
    }
}
