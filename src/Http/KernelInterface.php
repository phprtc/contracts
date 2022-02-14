<?php

namespace RTC\Contracts\Http;

interface KernelInterface
{
    public function getHttpMiddlewares(): array;

    public function getHttpDefaultMiddlewares(): array;

    public function getHttpRouteMiddlewares(): array;
}