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

interface BadRequestResponseFactoryInterface
{
    /**
     * Creates an HTTP response with an `unprocessable entity`HTTP code.
     *
     * @template TResponse
     * 
     * @param array $errors 
     * @param array $headers
     * 
     * @return TResponse 
     */
    public function create(array $errors, array $headers = []);
}
