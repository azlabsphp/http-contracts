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

use Psr\Http\Message\ResponseInterface;

interface ResponseFactoryInterface
{
    /**
     * Creates `frameworks compatible` response instance from Psr response instance.
     *
     * @template TResponse
     *
     * @return TResponse
     */
    public function create(ResponseInterface $request, bool $streamed = false);
}
