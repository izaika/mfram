<?php

namespace Mindk\Framework\Router;

/**
 * Class Route
 * @package Mindk\Framework\Router
 */
class Route
{
    /**
     * @var string Route name
     */
    private $name;

    /**
     * @var string Controller name
     */
    private $controller;

    /**
     * @var string Method name
     */
    private $method;

    /**
     * @var array Parsed params
     */
    private $params = [];

    /**
     * Route constructor.
     * @param string $name
     * @param string $controller
     * @param string $method
     * @param array $params
     */
    public function __construct($name, $controller, $method, array $params = [])
    {
        $this->name = $name;
        $this->controller = $controller;
        $this->method = $method;
        $this->params = $params;
    }


    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getController(): string
    {
        return $this->controller;
    }

    /**
     * @param string $controller
     */
    public function setController(string $controller)
    {
        $this->controller = $controller;
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * @param string $method
     */
    public function setMethod(string $method)
    {
        $this->method = $method;
    }

    /**
     * @return array
     */
    public function getParams(): array
    {
        return $this->params;
    }

    /**
     * @param array $params
     */
    public function setParams(array $params)
    {
        $this->params = $params;
    }

}