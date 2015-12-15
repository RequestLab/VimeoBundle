<?php

/*
 * This file is part of the RequestLab package.
 *
 * (c) RequestLab <hello@requestlab.fr>
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 */

namespace RequestLab\VimeoBundle\Tests\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use RequestLab\VimeoBundle\DependencyInjection\RequestLabVimeoExtension;

/**
 * Abstract RequestLab Vimeo extension test.
 *
 * @author Yann Lecommandoux <yann@requestlab.fr>
 */
abstract class AbstractRequestLabVimeoExtensionTest extends \PHPUnit_Framework_TestCase
{
    /** @var \Symfony\Component\DependencyInjection\ContainerBuilder */
    protected $container;

    /**
     * {@ineritdoc}
     */
    protected function setUp()
    {
        $this->container = new ContainerBuilder();
        $this->container->setParameter('bundle.dir', realpath(__DIR__.'/../../'));
        $this->container->registerExtension(new RequestLabVimeoExtension());
    }

    /**
     * {@ineritdoc}
     */
    protected function tearDown()
    {
        unset($this->container);
    }

    /**
     * Loads a configuration.
     *
     * @param \Symfony\Component\DependencyInjection\ContainerBuilder $container     The container builder.
     * @param string                                                  $configuration The configuration name.
     */
    abstract protected function loadConfiguration(ContainerBuilder $container, $configuration);

    public function testVimeoService()
    {
        $this->loadConfiguration($this->container, 'request_lab_vimeo');
        $this->container->compile();

        $vimeo = $this->container->get('vimeo');

        $this->assertInstanceOf('RequestLab\VimeoBundle\Service\VimeoService', $vimeo);
    }


    /**
     * @expectedException \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException
     */
    public function testClientIdRequired()
    {
        $this->loadConfiguration($this->container, 'client_id');
        $this->container->compile();
    }

    /**
     * @expectedException \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException
     */
    public function testClientSecretRequired()
    {
        $this->loadConfiguration($this->container, 'client_secret');
        $this->container->compile();
    }

}