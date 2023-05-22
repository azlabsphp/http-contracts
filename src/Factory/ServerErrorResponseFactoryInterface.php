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

use Throwable;

interface ServerErrorResponseFactoryInterface
{
    /**
     * Return an HTTP response with HTTP `Error code`.
     *
     * @template TException of Throwable
     * @template TResponse
     *
     * @param array|string|null $data
     *
     * @return TResponse
     */
    public function create(\Throwable $e, $data = null);
}
