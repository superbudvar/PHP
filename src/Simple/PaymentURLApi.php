<?php

namespace FirstData\FirstApi\Client\Simple;

use FirstData\FirstApi\Client\ApiException;
use FirstData\FirstApi\Client\Model\ErrorResponse;
use FirstData\FirstApi\Client\Model\PaymentUrlRequest;
use FirstData\FirstApi\Client\Model\PaymentUrlResponse;
use InvalidArgumentException;

/**
 * Class PaymentURLApi
 * @package FirstData\FirstApi\Client\Simple
 */
class PaymentURLApi extends ApiWrapper
{
    /** @var \FirstData\FirstApi\Client\Api\PaymentURLApi */
    private $client;

    /**
     * PaymentURLApi constructor.
     * @param  ClientContext $context
     */
    public function __construct(ClientContext $context)
    {
        parent::__construct($context);
        $this->client = $this->buildClient(\FirstData\FirstApi\Client\Api\PaymentURLApi::class);
    }

    /**
     * Operation createPaymentUrl
     *
     * Create a payment URL.
     *
     * @param  PaymentUrlRequest $payload payload (required)
     * @param  string $region The region where client wants to process the transaction (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return PaymentUrlResponse|ErrorResponse
     */
    public function createPaymentUrl(PaymentUrlRequest $payload, $region = null)
    {
        $strPayload = $this->serialize($payload);
        $headers = $this->genHeaders($strPayload);
        return $this->client->createPaymentUrl(
            $headers->getContentType(),
            $headers->getClientRequestId(),
            $headers->getApiKey(),
            $headers->getTimestamp(),
            $payload,
            $headers->getMessageSignature(),
            $region ?? $this->getDefaultRegion()
        );
    }
}
