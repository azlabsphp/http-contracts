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

namespace Drewlabs\Http\Factory;

interface OkResponseFactoryInterface
{
    /**
     * HTTP `OK` response handler.
     *
     * @template TValue
     * @template TResponse
     *
     * @param TValue $data
     * @param array $headers
     *
     * @return TResponse
     */
    public function create($data, array $headers = []);
}
