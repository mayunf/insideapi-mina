<?php
/**
 * Created by PhpStorm.
 * User: mayunfeng
 * Date: 2018/2/22
 * Time: 14:02
 */

namespace Mayunfeng\InsideMina\Foundation;


use Mayunfeng\Supports\Config;
use Monolog\Handler\HandlerInterface;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Pimple\Container;
use Symfony\Component\HttpFoundation\Request;
use Mayunfeng\InsideMina\Core\AccessToken;
use Mayunfeng\InsideMina\Core\Http;
use Mayunfeng\Supports\Log;

/**
 * Class Application
 *
 * @property \Mayunfeng\InsideMina\User\User                $user
 * @property \Mayunfeng\InsideMina\Weixin\Weixin            $weixin
 *
 * @package InsideAPI\Foundation
 */
class Application extends Container
{

    protected $providers = [
        ServiceProviders\UserServiceProvider::class,
        ServiceProviders\WeixinServiceProvider::class
    ];


    /**
     * Application constructor.
     * @param $config
     */
    public function __construct($config)
    {

        parent::__construct();

        $this['config'] = function () use ($config) {
            return new Config($config);
        };

        if ($this['config']['debug'] == true) {
            error_reporting(E_ALL);
        }
        $this->registerProviders();
        $this->registerBase();
        $this->initializeLogger();
        Http::setDefaultOptions($this['config']->get('guzzle', ['timeout' => 5.0]));
    }


    // 初始化token信息
    private function registerBase()
    {
        $this['request'] = function () {
            return Request::createFromGlobals();
        };

        $this['access_token'] = function () {
            return new AccessToken(
                $this['config']['token'],
                $this['config']['userid']
            );
        };
    }

    // 注册服务
    private function registerProviders()
    {
        foreach ($this->providers as $provider) {
            $this->register(new $provider());
        }
    }

    /**
     * @throws \Exception
     */
    private function initializeLogger()
    {
        if (Log::hasLogger()) {
            return;
        }

        $logger = new Logger('insideapi');

        if (!$this['config']['debug'] || defined('PHPUNIT_RUNNING')) {
//            $logger->pushHandler(new NullHandler());
            $logFile = $this['config']['log.file'];
            $logger->pushHandler(new StreamHandler(
                    $logFile,
                    $this['config']->get('log.level', Logger::WARNING),
                    true,
                    $this['config']->get('log.permission', null))
            );
        } elseif ($this['config']['log.handler'] instanceof HandlerInterface) {
            $logger->pushHandler($this['config']['log.handler']);
        } elseif ($logFile = $this['config']['log.file']) {
            $logger->pushHandler(new StreamHandler(
                    $logFile,
                    $this['config']->get('log.level', Logger::WARNING),
                    true,
                    $this['config']->get('log.permission', null))
            );
        }
        Log::setLogger($logger);
    }

    /**
     * Add a provider.
     *
     * @param string $provider
     *
     * @return Application
     */
    public function addProvider($provider)
    {
        array_push($this->providers, $provider);

        return $this;
    }

    /**
     * Set providers.
     *
     * @param array $providers
     */
    public function setProviders(array $providers)
    {
        $this->providers = [];
        foreach ($providers as $provider) {
            $this->addProvider($provider);
        }
    }

    /**
     * Return all providers.
     *
     * @return array
     */
    public function getProviders()
    {
        return $this->providers;
    }

    /**
     * Magic get access.
     *
     * @param string $id
     *
     * @return mixed
     */
    public function __get($id)
    {
        return $this->offsetGet($id);
    }

    /**
     * Magic set access.
     *
     * @param string $id
     * @param mixed  $value
     */
    public function __set($id, $value)
    {
        $this->offsetSet($id, $value);
    }
}
