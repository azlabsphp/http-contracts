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

namespace Drewlabs\Http\Exceptions;

use Drewlabs\Http\ReasonPhrase;
use Psr\Http\Message\ServerRequestInterface;

class HttpException extends \Exception implements \Throwable
{
    /**
     * @var ServerRequestInterface|object
     */
    private $request;

    /**
     * @var array
     */
    private $headers;

    /**
     * @var int
     */
    private $statusCode;

    /**
     * Creates an instance of HttpException.
     *
     * @param int|string $statusCode
     */
    public function __construct($statusCode, string $message = '', \Throwable $previous = null, array $headers = [])
    {
        parent::__construct($message, (int) $statusCode, $previous);
        $this->statusCode = (int) $statusCode;
        $this->headers = $headers;
    }

    /**
     * Creates exception class with an `authorization error` HTTP code.
     *
     * @param mixed  $request
     * @param string $message
     *
     * @return HttpException
     */
    public static function Unauthorized($request = null, $message = 'Unauthorized', array $headers = [])
    {
        $exception = new self(401, $message, null, $headers);
        $exception->request = $request;

        return $exception;
    }

    /**
     * Creates HTTP 404 response.
     *
     * @param mixed $request
     *
     * @return self
     */
    public static function NotFound($request = null, array $headers = [])
    {
        $exception = new self(404, 'Not Found', null, $headers);
        $exception->request = $request;

        return $exception;
    }

    /**
     * Creates exception with `unprocessable entity` HTTP code.
     *
     * @param mixed $request
     *
     * @return HttpException
     */
    public static function BadRequest($request = null, array $headers = [])
    {
        $exception = new self(422, ReasonPhrase::get(422), null, $headers);
        $exception->request = $request;

        return $exception;
    }

    /**
     * Creates exception with `locked` HTTP code.
     *
     * @param mixed $request
     *
     * @return HttpException
     */
    public static function Locked($request = null, array $headers = [])
    {
        $exception = new self(423, ReasonPhrase::get(423), null, $headers);
        $exception->request = $request;

        return $exception;
    }

    /**
     * Creates exception with `forbidden` HTTP code.
     *
     * @param mixed $request
     *
     * @return HttpException
     */
    public static function Forbidden($request = null, array $headers = [])
    {
        $exception = new self(403, ReasonPhrase::get(403), null, $headers);
        $exception->request = $request;

        return $exception;
    }

    /**
     * Creates exception with `bad gateway` HTTP code.
     *
     * @param mixed $request
     *
     * @return HttpException
     */
    public static function BadGateway($request = null, array $headers = [])
    {
        $exception = new self(502, ReasonPhrase::get(502), null, $headers);
        $exception->request = $request;

        return $exception;
    }

    /**
     * Returns the request instance.
     *
     * @return mixed|null
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Returns the HTTP headers.
     *
     * @return array
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * Returns the HTTP status code.
     */
    public function getStatusCode(): int
    {
        return $this->statusCode;
    }
}
