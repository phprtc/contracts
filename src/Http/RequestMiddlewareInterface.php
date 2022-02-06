<?php

namespace RTC\Contracts\Http;

use SplQueue;

interface RequestMiddlewareInterface
{
    public function __construct(RequestInterface $request, array $middlewares);

    public function push(MiddlewareInterface $middleware): void;

    public function next(): void;

    public function getCurrent(): MiddlewareInterface;

    public function getQueue(): SplQueue;
}