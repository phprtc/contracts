<?php

namespace RTC\Contracts\Http\Router;

use JsonSerializable;

interface RouteDataInterface extends JsonSerializable
{
    public function getPrefix(): string;

    public function getName(): string;

    public function getAppendedPrefix(): string;

    public function getPrependedPrefix(): string;

    public function getNamespace(): string;

    public function getMethod(): string;

    public function getMiddleware(): array;

    public function getHandler(): mixed;

    public function getController(): mixed;

    public function getFields(): array;

    public function getRegExp(): array;

    public function getData(): array;
}