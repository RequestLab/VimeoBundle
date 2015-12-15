<?php
/*
 * This file is part of the RequestLab package.
 *
 * (c) RequestLab <hello@requestlab.fr>
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 */
namespace RequestLab\VimeoBundle\Tests;

use RequestLab\VimeoBundle\RequestLabVimeoBundle;
/**
 * RequestLab Vimeo bundle test.
 *
 * @author Yann Lecommandoux <yann@requestlab.fr>
 */
class RequestLabVimeoBundleTest extends \PHPUnit_Framework_TestCase
{
    /** @var \RequestLab\VimeoBundle\RequestLabVimeoBundle */
    protected $bundle;
    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->bundle = new RequestLabVimeoBundle();
    }
    /**
     * {@inheritdoc}
     */
    protected function tearDown()
    {
        unset($this->bundle);
    }
    public function testInheritance()
    {
        $this->assertInstanceOf('Symfony\Component\HttpKernel\Bundle\Bundle', $this->bundle);
    }
}