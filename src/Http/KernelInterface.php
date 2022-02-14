<?php

namespace RTC\Contracts\Http;

interface KernelInterface
{
    public function getMiddlewares(): array;

    public function getDefaultMiddlewares(): array;

    public function getRouteMiddlewares(): array;
}