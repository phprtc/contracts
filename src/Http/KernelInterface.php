<?php

namespace RTC\Contracts\Http;

interface KernelInterface
{
    public function getHandler(): HttpHandlerInterface;

    public function hasHandler(): bool;

    public function getMiddlewares(): array;

    public function getDefaultMiddlewares(): array;

    public function getRouteMiddlewares(): array;

    /**
     * Specifies whether to use default middlewares
     *
     * @return bool
     */
    public function shouldUseDefaultMiddlewares(): bool;
}