<?php

declare(strict_types=1);
namespace auf;

use PHPUnit\Framework\TestCase;
use auf\TestClass;

final class PluginTest extends TestCase {
  public function testTitleValue () {
    $this->assertEquals(site()->title()->value(), 'Auf-Style-Plugin');
  }

  public function testCreatesExampleClass () {
    $myTestClass = new TestClass('asdf');
    $this->assertEquals('asdf', $myTestClass->test);
  }

}