<?php

namespace DeliciousBrains\WP_Offload_S3\Aws2\Guzzle\Plugin\Backoff;

use DeliciousBrains\WP_Offload_S3\Aws2\Guzzle\Http\Message\RequestInterface;
use DeliciousBrains\WP_Offload_S3\Aws2\Guzzle\Http\Message\Response;
use DeliciousBrains\WP_Offload_S3\Aws2\Guzzle\Http\Exception\HttpException;
/**
 * Strategy to determine if a request should be retried and how long to delay between retries
 */
interface BackoffStrategyInterface
{
    /**
     * Get the amount of time to delay in seconds before retrying a request
     *
     * @param int              $retries  Number of retries of the request
     * @param RequestInterface $request  Request that was sent
     * @param Response         $response Response that was received. Note that there may not be a response
     * @param HttpException    $e        Exception that was encountered if any
     *
     * @return bool|int Returns false to not retry or the number of seconds to delay between retries
     */
    public function getBackoffPeriod($retries, \DeliciousBrains\WP_Offload_S3\Aws2\Guzzle\Http\Message\RequestInterface $request, \DeliciousBrains\WP_Offload_S3\Aws2\Guzzle\Http\Message\Response $response = null, \DeliciousBrains\WP_Offload_S3\Aws2\Guzzle\Http\Exception\HttpException $e = null);
}
