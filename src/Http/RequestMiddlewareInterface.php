<?php

namespace RTC\Contracts\Http;

use SplQueue;

interface RequestMiddlewareInterface
{
    public function __construct(RequestInterface $request, array $middlewares);

    /**
     * Add middleware to middleware queue
     *
     * @param MiddlewareInterface $middleware
     * @return void
     */
    public function push(MiddlewareInterface $middleware): void;

    /**
     * Executes next middleware in the queue
     *
     * @return void
     * @throws HttpException
     */
    public function next(): void;

    /**
     * Check if next middleware exists
     *
     * @return bool
     */
    public function hasNext(): bool;

    /**
     * Check if next middleware exists
     *
     * @return MiddlewareInterface|null
     */
    public function getNext(): null|MiddlewareInterface;

    /**
     * Retrieve current middleware in the queue
     *
     * @return MiddlewareInterface|null
     */
    public function getCurrent(): null|MiddlewareInterface;

    /**
     * Retrieve middlewares queue object
     *
     * @return SplQueue<MiddlewareInterface>
     */
    public function getQueue(): SplQueue;
}