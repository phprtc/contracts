<?php

namespace RTC\Contracts\Http\Router;

use Closure;

interface RouteInterface
{
    /**
     * HttpServer request prefix
     *
     * @param string $prefix
     * @return static
     */
    public function prefix(string $prefix): static;

    /**
     * Group http requests together
     *
     * @param Closure $closure
     * @return static
     */
    public function group(Closure $closure): static;

    /** Set namespace to group of routes
     *
     * @param string $namespace
     * @return static
     */
    public function namespace(string $namespace): static;

    /** Set namespace to group of routes
     *
     * @param array|string $middleware
     * @return static
     */
    public function middleware(array|string $middleware): static;

    /** Set name to group of routes
     *
     * @param string $name
     * @return  static
     */
    public function name(string $name): static;

    /**
     * Add field of data to route collection
     *
     * @param string $name
     * @param callable|mixed $value
     * @return static
     */
    public function addField(string $name, mixed $value): static;

    /**
     * Append string of prefix to route
     *
     * @param string $prefix
     * @return static
     */
    public function append(string $prefix): static;

    /**
     * Prepend string of prefix to route
     *
     * @param string $prefix
     * @return static
     */
    public function prepend(string $prefix): static;

    /**
     * Add GET to route collection
     *
     * @param string $route
     * @param callable $action
     * @return static
     */
    public function get(string $route, callable $action): static;

    /**
     * Add POST to route collection
     *
     * @param string $route
     * @param callable $action
     * @return static
     */
    public function post(string $route, callable $action): static;

    /**
     * Add PUT to route collection
     *
     * @param string $route
     * @param callable $action
     * @return static
     */
    public function put(string $route, callable $action): static;

    /**
     * Add PATCH to route collection
     *
     * @param string $route
     * @param callable $action
     * @return static
     */
    public function patch(string $route, callable $action): static;

    /**
     * Add DELETE to route collection
     *
     * @param string $route
     * @param callable $action
     * @return static
     */
    public function delete(string $route, callable $action): static;

    /**
     * Add HEAD to route collection
     * @param string $route
     * @param callable $action
     * @return static
     */
    public function head(string $route, callable $action): static;

    /**
     * Register route to multiple http verbs
     * @param array $methods
     * @param string $uri
     * @param callable $action
     * @return static
     */
    public function match(array $methods, string $uri, callable $action): static;

    /**
     * Register multiple paths to single handler
     *
     * @param array $paths
     * @param string $method
     * @param callable $action
     * @return static
     */
    public function any(array $paths, string $method, callable $action): static;

    /**
     * @param array $methods
     * @param array $paths
     * @param callable $action
     * @return static
     */
    public function matchAny(array $methods, array $paths, callable $action): static;

    /**
     * This single route declaration creates multiple routes to handle a variety of actions on the resource.
     *
     * @param string $uri
     * @param string $controller
     * @param string $idParameterName Specifies what name should be given to generated id parameter
     * @param bool $integerId Specifies that id associated with this route must be integer
     * @return static
     */
    public function resource(
        string $uri,
        string $controller,
        string $idParameterName = 'id',
        bool   $integerId = true
    ): static;

    /**
     * Manually provide regular expression pattern to parameter
     *
     * @param array|string $parameter
     * @param string|null $regExp
     * @return static
     */
    public function where(array|string $parameter, ?string $regExp = null): static;

    /**
     * Indicates that the given route parameters must be number.
     *
     * @param string $param
     * @return static
     */
    public function whereNumber(string $param): static;

    /**
     * Indicates that the given route parameters must be alphabetic.
     *
     * @param string $param
     * @return static
     */
    public function whereAlpha(string $param): static;

    /**
     * Indicates that the given route parameters must be alphanumeric.
     *
     * @param string $param
     * @return static
     */
    public function whereAlphaNumeric(string $param): static;

    /**
     * Retrieve registered routes
     * @return array
     */
    public function getRouteData(): array;

    /**
     * This method will be invoked just before registering routes
     * @return static
     */
    public function onRegister(): static;
}