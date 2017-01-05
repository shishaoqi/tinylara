<?php
/**
 * @Author: shishao
 * @Date:   2017-01-05 22:08:42
 * @Last Modified by:   shishao
 */
namespace shishao\Foundation;

use shishao\Container\Container;

class Application extends Container
{
    /**
     * The TinyLara framework version.
     *
     * @var string
     */
    const VERSION = '0.1';

    /**
     * The base path for the TinyLara installation.
     *
     * @var string
     */
    protected $basePath;

    /**
     * Create a new shishao application instance.
     *
     * @param  string|null  $basePath
     * @return void
     */
    public function __construct($basePath = null)
    {
        $this->registerBaseBindings();

        //$this->registerBaseServiceProviders();

        //$this->registerCoreContainerAliases();

        if ($basePath) {
            $this->setBasePath($basePath);
        }
    }

    /**
     * Register the basic bindings into the container.
     *
     * @return void
     */
    protected function registerBaseBindings()
    {
        static::setInstance($this);

        $this->instance('app', $this);

        $this->instance('shishao\Container\Container', $this);
    }

    /**
     * Register all of the base service providers.
     *
     * @return void
     */
    protected function registerBaseServiceProviders()
    {
        $this->register(new EventServiceProvider($this));

        $this->register(new RoutingServiceProvider($this));
    }

    /**
     * Set the base path for the application.
     *
     * @param  string  $basePath
     * @return $this
     */
    public function setBasePath($basePath)
    {
        $this->basePath = rtrim($basePath, '\/');

        //$this->bindPathsInContainer();

        return $this;
    }


}