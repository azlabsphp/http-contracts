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

interface ViewResponseFactoryInterface
{
    /**
     * Creates a view resource response.
     *
     * @template TViewResponse of \Stringable
     *
     * @return TViewResponse|string
     */
    public function create(string $path, array $data = []);
}
