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

use Psr\Http\Message\ResponseInterface;

/**
 * @template TResponse
 * 
 * @method TResponse create($data, $status = null, array $headers = [], string $protocol = '1.1')
 * @method TResponse create(\Psr\Http\Message\ResponseInterface $response, bool $streamed)
 * 
 * @package Drewlabs\Http\Factory
 */
interface ResponseFactoryInterface
{
    /**
     * Creates HTTP response instance
     * 
     * @template TResponse
     * 
     * @param mixed  ...$args
     * @return TResponse 
     */
    public function create(...$args);
}
