<?php

namespace FirstData\FirstApi\Client\Simple;

use FirstData\FirstApi\Client\ApiException;
use FirstData\FirstApi\Client\Model\AccessTokenResponse;
use FirstData\FirstApi\Client\Model\ErrorResponse;
use InvalidArgumentException;

/**
 * Class AuthenticationApi
 * @package FirstData\FirstApi\Client\Simple
 */
class AuthenticationApi extends ApiWrapper
{
    /** @var \FirstData\FirstApi\Client\Api\AuthenticationApi  */
    private $client;

    /**
     * AuthenticationApi constructor.
     * @param  ClientContext $context
     */
    public function __construct(ClientContext $context)
    {
        parent::__construct($context);
        $this->client = $this->buildClient(\FirstData\FirstApi\Client\Api\AuthenticationApi::class);
    }

    /**
     * Operation getAccessToken
     *
     * Generate an access token for user authentication.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return AccessTokenResponse|ErrorResponse
     */
    public function getAccessToken()
    {
        $headers = $this->genHeaders();
        return $this->client->v1AuthenticationAccessTokensPost(
            $headers->getContentType(),
            $headers->getClientRequestId(),
            $headers->getApiKey(),
            $headers->getTimestamp(),
            $headers->getMessageSignature()
        );
    }
}
