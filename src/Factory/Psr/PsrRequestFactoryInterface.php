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

namespace Drewlabs\Http\Factory\Psr;

use Psr\Http\Message\ServerRequestInterface;

interface PsrRequestFactoryInterface
{
    /**
     * Creates a PSR-7 Request instance from a framework one.
     *
     * @template TRequest
     *
     * @param TRequest $request
     *
     * @return ServerRequestInterface
     */
    public function create($request);
}
