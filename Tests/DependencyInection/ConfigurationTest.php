<?php

namespace Kami\IcoBenchBundle\Tests\DependencyInection;

use Kami\IcoBenchBundle\DependencyInjection\Configuration;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;

class ConfigurationTest extends TestCase
{

    public function testGetConfigTreeBuilder()
    {
        $configuration = new Configuration();
        $treeBuilder = $configuration->getConfigTreeBuilder();
        $tree = $treeBuilder->buildTree();
        $this->assertInstanceOf(TreeBuilder::class, $treeBuilder);
        $this->assertEquals('kami_icobench', $tree->getName());
    }
}
