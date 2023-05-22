<?php

declare(strict_types=1);

/*
 * This file is part of the drewlabs namespace.
 *
 * (c) Sidoine Azandrew <azandrewdevelopper@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Drewlabs\Http;

/**
 * **Note** `ResponseHandler` interface was added for compatibility with previous implementations
 * and might be removed in future release. Please consider using factory conterpart instead.
 */
interface ResponseHandler
{
    /**
     * Creates an HTTP response with `data`, `status code` and HTTP `headers`.
     *
     * @template TResponse
     *
     * @param mixed $data
     *
     * @return TResponse
     */
    public function respond($data, int $status, array $headers = []);

    /**
     * HTTP `OK` response handler.
     *
     * @template TResponse
     *
     * @param mixed $data
     * @param bool  $success
     *
     * @return TResponse
     */
    public function ok($data, array $errors = null, $success = true);

    /**
     * Return a Server Error HTTP response  with status 500.
     *
     * @template TResponse
     *
     * @param array|string|null $errors
     *
     * @return TResponse
     */
    public function error(\Throwable $e, $errors = null);

    /**
     * Creates an HTTP response with an `unprocessable entity`HTTP code.
     *
     * @template TResponse
     *
     * @return TResponse
     */
    public function badRequest(array $errors);
}
