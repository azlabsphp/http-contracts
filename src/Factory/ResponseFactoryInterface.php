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

interface ResponseFactoryInterface
{
    /**
     * Creates an HTTP response with `data`, `status code` and HTTP `headers`.
     *
     * @template TValue
     * @template TResponse
     *
     * @param TValue     $data
     * @param int|string $protocol
     *
     * @return TResponse
     */
    public function create($data, int $status, array $headers = [], string $protocol = '1.1');
}
