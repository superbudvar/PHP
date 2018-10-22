<?php
/**
 * Created by PhpStorm.
 * User: bgarcia
 * Date: 9/11/18
 * Time: 1:12 PM
 */

namespace FirstData\FirstApi\Client\Simple;


use FirstData\FirstApi\Client\Api\AuthenticationApi;
use FirstData\FirstApi\Client\Api\OrderApi;
use FirstData\FirstApi\Client\Api\PaymentApi;
use FirstData\FirstApi\Client\Model\PrimaryTransaction;
use FirstData\FirstApi\Client\Model\SecondaryTransaction;
use Ramsey\Uuid\Uuid;

class ApiClient implements ApiClientInterface
{
    const CONTENT_TYPE = 'application/json';

    /**
     * @param MerchantCredentials $creds
     * @return ApiClientInterface
     */
    public static function create(MerchantCredentials $creds)
    {
        return new static(ClientContext::create($creds));
    }

    /** @var ClientContext  */
    private $context;

    /** @var  AuthenticationApi */
    private $authenticationApi;

    /** @var  OrderApi */
    private $orderApi;

    /** @var  PaymentApi */
    private $paymentApi;

    /**
     * ApiClient constructor.
     * @param ClientContext $context
     */
    public function __construct(ClientContext $context)
    {
        $this->context = $context;
        $this->authenticationApi = new AuthenticationApi($context->getClient(), $context->getConfig(), $context->getSelector());
        $this->orderApi = new OrderApi($context->getClient(), $context->getConfig(), $context->getSelector());
        $this->paymentApi = new paymentApi($context->getClient(), $context->getConfig(), $context->getSelector());
    }

    /**
     * @return \FirstData\FirstApi\Client\Model\AccessTokenResponse
     * @throws \InvalidArgumentException
     * @throws \FirstData\FirstApi\Client\ApiException
     */
    public function requestAccessToken()
    {
        $clientRequestId = $this->clientRequestId();
        $timestamp = $this->timestamp();
        $messageSignature = $this->messageSignature($clientRequestId, $timestamp);
        return $this->authenticationApi->v1AuthenticationAccessTokensPost(
            static::CONTENT_TYPE,
            $clientRequestId,
            $this->getApiKey(),
            $timestamp,
            $messageSignature
        );
    }

    /**
     * @param string $orderId
     * @param SecondaryTransaction $payload
     * @param string|null $storeId
     * @return \FirstData\FirstApi\Client\Model\TransactionResponse
     * @throws \FirstData\FirstApi\Client\ApiException
     * @throws \InvalidArgumentException
     */
    public function performPaymentPostAuthorizationByOrder($orderId, SecondaryTransaction $payload, $storeId = null)
    {
        $clientRequestId = $this->clientRequestId();
        $strPayload = $this->serialize($payload);
        $timestamp = $this->timestamp();
        $messageSignature = $this->messageSignature($clientRequestId, $timestamp, $strPayload);
        return $this->orderApi->performPaymentPostAuthorisation(
            static::CONTENT_TYPE,
            $clientRequestId,
            $this->getApiKey(),
            $timestamp,
            $messageSignature,
            $orderId,
            $payload,
            $storeId
        );
    }

    /**
     * @param string $orderId
     * @param SecondaryTransaction $payload
     * @param string|null $storeId
     * @return \FirstData\FirstApi\Client\Model\TransactionResponse
     * @throws \FirstData\FirstApi\Client\ApiException
     * @throws \InvalidArgumentException
     */
    public function returnTransactionByOrder($orderId, SecondaryTransaction $payload, $storeId = null)
    {
        $clientRequestId = $this->clientRequestId();
        $strPayload = $this->serialize($payload);
        $timestamp = $this->timestamp();
        $messageSignature = $this->messageSignature($clientRequestId, $timestamp, $strPayload);
        return $this->orderApi->returnTransaction(
            static::CONTENT_TYPE,
            $clientRequestId,
            $this->getApiKey(),
            $timestamp,
            $messageSignature,
            $orderId,
            $payload,
            $storeId
        );
    }

    /**
     * @param string $transactionId
     * @param SecondaryTransaction $payload
     * @param string|null $storeId
     * @return \FirstData\FirstApi\Client\Model\TransactionResponse
     * @throws \FirstData\FirstApi\Client\ApiException
     * @throws \InvalidArgumentException
     */
    public function performPaymentPostAuthorizationByTransaction($transactionId, SecondaryTransaction $payload, $storeId = null)
    {
        $clientRequestId = $this->clientRequestId();
        $strPayload = $this->serialize($payload);
        $timestamp = $this->timestamp();
        $messageSignature = $this->messageSignature($clientRequestId, $timestamp, $strPayload);
        return $this->paymentApi->performPaymentPostAuthorisation(
            static::CONTENT_TYPE,
            $clientRequestId,
            $this->getApiKey(),
            $timestamp,
            $messageSignature,
            $transactionId,
            $payload,
            $storeId
        );
    }

    /**
     * @param PrimaryTransaction $payload
     * @return \FirstData\FirstApi\Client\Model\TransactionResponse
     * @throws \FirstData\FirstApi\Client\ApiException
     * @throws \InvalidArgumentException
     */
    public function primaryPaymentTransaction(PrimaryTransaction $payload)
    {
        $clientRequestId = $this->clientRequestId();
        $strPayload = $this->serialize($payload);
        $timestamp = $this->timestamp();
        $messageSignature = $this->messageSignature($clientRequestId, $timestamp, $strPayload);
        return $this->paymentApi->primaryPaymentTransaction(
            static::CONTENT_TYPE,
            $clientRequestId,
            $this->getApiKey(),
            $timestamp,
            $messageSignature,
            $payload
        );
    }

    /**
     * @param string $transactionId
     * @param SecondaryTransaction $payload
     * @param string|null $storeId
     * @return \FirstData\FirstApi\Client\Model\TransactionResponse
     * @throws \FirstData\FirstApi\Client\ApiException
     * @throws \InvalidArgumentException
     */
    public function returnTransaction($transactionId, SecondaryTransaction $payload, $storeId = null)
    {
        $clientRequestId = $this->clientRequestId();
        $strPayload = $this->serialize($payload);
        $timestamp = $this->timestamp();
        $messageSignature = $this->messageSignature($clientRequestId, $timestamp, $strPayload);
        return $this->paymentApi->returnTransaction(
            static::CONTENT_TYPE,
            $clientRequestId,
            $this->getApiKey(),
            $timestamp,
            $messageSignature,
            $transactionId,
            $payload,
            $storeId
        );
    }

    /**
     * @param string $transactionId
     * @param string|null $storeId
     * @return \FirstData\FirstApi\Client\Model\TransactionResponse
     * @throws \FirstData\FirstApi\Client\ApiException
     * @throws \InvalidArgumentException
     */
    public function transactionInquiry($transactionId, $storeId = null)
    {
        $clientRequestId = $this->clientRequestId();
        $timestamp = $this->timestamp();
        $messageSignature = $this->messageSignature($clientRequestId, $timestamp);
        return $this->paymentApi->transactionInquiry(
            static::CONTENT_TYPE,
            $clientRequestId,
            $this->getApiKey(),
            $timestamp,
            $messageSignature,
            $transactionId,
            $storeId
        );
    }

    /**
     * @param string $transactionId
     * @param string|null $storeId
     * @return \FirstData\FirstApi\Client\Model\TransactionResponse
     * @throws \FirstData\FirstApi\Client\ApiException
     * @throws \InvalidArgumentException
     */
    public function voidTransaction($transactionId, $storeId = null)
    {
        $clientRequestId = $this->clientRequestId();
        $timestamp = $this->timestamp();
        $messageSignature = $this->messageSignature($clientRequestId, $timestamp);
        return $this->paymentApi->voidTransaction(
            static::CONTENT_TYPE,
            $clientRequestId,
            $this->getApiKey(),
            $timestamp,
            $messageSignature,
            $transactionId,
            $storeId
        );
    }

    private function getApiSecret()
    {
        return $this->context
            ->getCredentials()
            ->getApiSecret();
    }

    private function getApiKey()
    {
        return $this->context
            ->getCredentials()
            ->getApiKey();
    }

    /**
     * @return string
     */
    private function clientRequestId()
    {
        return Uuid::uuid4()->toString();
    }

    private function timestamp()
    {
        return time() * 1000;
    }

    /**
     * @param string $clientRequestId
     * @param int $timestamp
     * @param string $payload
     * @return string
     */
    private function messageSignature($clientRequestId, $timestamp, $payload = '')
    {
        $msg = $this->getApiKey() . $clientRequestId . $timestamp . $payload;
        return MessageSignature::generate($this->getApiSecret(), $msg);
    }

    /**
     * @param $payload
     * @return string
     */
    private function serialize($payload)
    {
        return $payload->__toString();
    }
}
