<?php

namespace RTC\Contracts\Http;

use HttpStatusCodes\StatusCode;
use Swoole\Http\Response as Http1Response;

interface ResponseInterface
{
    public function __construct(RequestInterface $request, Http1Response $response);

    public function json(array|object $data, StatusCode $status = StatusCode::OK, array $headers = []): void;

    public function html(string $code, StatusCode $status = StatusCode::OK, array $headers = []): void;

    public function plain(string $string, StatusCode $status = StatusCode::OK, array $headers = []): void;

    public function redirect(string $url, array $headers = []): void;

    public function header(string $name, string $value): static;

    public function sendFile(string $path): void;

    public function serveHtmlFile(string $path): void;

    public function trailer(string $key, string $value): void;

    public function write(string $data): static;

    public function cookie(
        string $key,
        string $value = '',
        int    $expire = 0,
        string $path = '/',
        string $domain = '',
        bool   $secure = false,
        bool   $httponly = false,
        string $samesite = '',
        string $priority = ''
    ): static;
}