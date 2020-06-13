<?php
/**
 * @author    jan huang <bboyjanhuang@gmail.com>
 * @copyright 2016
 *
 * @see      https://www.github.com/janhuang
 * @see      https://fastdlabs.com
 */

namespace FastD\ServiceProvider;

use FastD\Config\Config;
use FastD\Container\Container;
use FastD\Container\ServiceProviderInterface;

/**
 * Class ConfigServiceProvider.
 */
class ConfigServiceProvider implements ServiceProviderInterface
{
    /**
     * @param Container $container
     *
     * @return mixed
     */
    public function register(Container $container): void
    {
        $config = new Config();
        $container->add('config', $config);

        $path = app()->getPath();


        if (file_exists($path.'/.env.yml')) {
            $config->merge(load($path.'/.env.yml'));
        }
        echo 1;die;
    }
}
