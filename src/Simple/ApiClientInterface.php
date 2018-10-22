<?php
/**
 * Created by PhpStorm.
 * User: bgarcia
 * Date: 9/11/18
 * Time: 1:33 PM
 */

namespace FirstData\FirstApi\Client\Simple;

use FirstData\FirstApi\Client\ApiException;
use FirstData\FirstApi\Client\Model\AccessTokenResponse;
use FirstData\FirstApi\Client\Model\PrimaryTransaction;
use FirstData\FirstApi\Client\Model\SecondaryTransaction;
use FirstData\FirstApi\Client\Model\TransactionResponse;
use InvalidArgumentException;

/**
 * Interface ApiClientInterface
 * @package FirstData\FirstApi\Client\Simple
 *
 * Implementing Class:
 */
interface ApiClientInterface
{
    /**
     * Generate an access token for user authentication
     * POST /v1/authentication/access-tokens
     *
     *
     * @return AccessTokenResponse
     * @throws InvalidArgumentException
     * @throws ApiException
     */
    public function requestAccessToken();

    /**
     * Use this to capture/complete a transaction. Partial postauths are allowed.
     * POST /v1/orders/{order-id}/postauth
     *
     * @param string $orderId                Gateway order identifier as returned in "orderId"
     * @param SecondaryTransaction $payload
     * @param string|null $storeId           Optional outlet id for clients that support multiple stores from the same dev app
     * @return TransactionResponse
     * @throws ApiException
     * @throws InvalidArgumentException
     */
    public function performPaymentPostAuthorizationByOrder($orderId, SecondaryTransaction $payload, $storeId = null);

    /**
     * Use this to return/refund on the order. Partial returns are allowed.
     * POST /v1/orders/{order-id}/return
     *
     * @param string $orderId                Gateway order identifier as returned in "orderId"
     * @param SecondaryTransaction $payload
     * @param string|null $storeId           Optional outlet id for clients that support multiple stores from the same dev app
     * @return TransactionResponse
     * @throws ApiException
     * @throws InvalidArgumentException
     */
    public function returnTransactionByOrder($orderId, SecondaryTransaction $payload, $storeId = null);

    /**
     * Use this to capture/complete a transaction. Partial postauths are allowed.
     * POST /v1/payments/{transaction-id}/postauth
     *
     * @param string $transactionId         Gateway transaction id as returned in "ipgTransactionId"
     * @param SecondaryTransaction $payload
     * @param string|null $storeId          Optional outlet id for clients that support multiple stores from the same dev app
     * @return TransactionResponse
     * @throws ApiException
     * @throws InvalidArgumentException
     */
    public function performPaymentPostAuthorizationByTransaction($transactionId, SecondaryTransaction $payload, $storeId = null);

    /**
     * Generate a primary transaction
     * POST /v1/payments
     *
     * @param PrimaryTransaction $payload
     * @return TransactionResponse
     * @throws ApiException
     * @throws InvalidArgumentException
     */
    public function primaryPaymentTransaction(PrimaryTransaction $payload);

    /**
     * Return/refund a transaction
     * POST /v1/payments/{transaction-id}/return
     *
     * @param string $transactionId          Gateway transaction id as returned in "ipgTransactionId"
     * @param SecondaryTransaction $payload
     * @param string|null $storeId           Optional outlet id for clients that support multiple stores from the same dev app
     * @return TransactionResponse
     * @throws ApiException
     * @throws InvalidArgumentException
     */
    public function returnTransaction($transactionId, SecondaryTransaction $payload, $storeId = null);

    /**
     * Retrieve the state of a transaction
     * GET /v1/payments/{transaction-id}
     *
     * @param string $transactionId     Gateway transaction id as returned in "ipgTransactionId"
     * @param string|null $storeId      Optional outlet id for clients that support multiple stores from the same dev app
     * @return TransactionResponse
     * @throws ApiException
     * @throws InvalidArgumentException
     */
    public function transactionInquiry($transactionId, $storeId = null);

    /**
     * Reverse a previous action on an existing transaction
     * POST /v1/payments/{transaction-id}/void
     *
     * @param string $transactionId     Gateway transaction id as returned in "ipgTransactionId"
     * @param string|null $storeId      Optional outlet id for clients that support multiple stores from the same dev app
     * @return TransactionResponse
     * @throws ApiException
     * @throws InvalidArgumentException
     */
    public function voidTransaction($transactionId, $storeId = null);
}