<?php

namespace RTC\Contracts\Http;

interface MiddlewareInterface
{
    public function handle(RequestInterface $request): void;
}