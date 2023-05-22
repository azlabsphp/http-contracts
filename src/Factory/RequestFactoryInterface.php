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

use Psr\Http\Message\ServerRequestInterface;

interface RequestFactoryInterface
{
    /**
     * Creates frameworks compatible request instance from Psr request instance.
     *
     * @template TRequest
     *
     * @return TRequest
     */
    public function create(ServerRequestInterface $request, bool $streamed = false);
}
