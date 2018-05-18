<?php

namespace Kami\IcoBenchBundle\Tests\DependencyInection;

use Kami\IcoBenchBundle\DependencyInjection\KamiIcoBenchExtension;
use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class KamiIcoBenchExtensionTest extends TestCase
{

    public function testLoad()
    {
        $container = new ContainerBuilder();
        $extension = new KamiIcoBenchExtension();
        $extension->load(
            ['kami_icobench' => [
                    'private_key'    => 'test',
                    'public_key'     => 'test',
                    'guzzle_options' => []
                ]
            ], $container);
        $this->assertEquals('test', $container->getParameter('kami.icobench.private_key'));
        $this->assertEquals('test', $container->getParameter('kami.icobench.public_key'));
        $this->assertEquals([], $container->getParameter('kami.icobench.guzzle_options'));
    }
}
