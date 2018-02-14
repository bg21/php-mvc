<?php

namespace Test\Models\Client;

use SON\Controller\Action;
use SON\DI\Container;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    public function testGetFirst() {
        $client = Container::getModel("Client")->find(1);
        $this->assertEquals('1', $client['id']);
        $this->assertEquals('j@emil.com', $client['email']);
    }

    public function testGetSecond() {
        $client = Container::getModel("Client")->find(2);
        $this->assertEquals('3', $client['id']);
        $this->assertEquals('luiz@emil.com', $client['email']);
    }
}
