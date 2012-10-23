<?php

namespace Dommy\Test\Node;

use Dommy\Node\TextNode;

class TextNodeTest extends \PHPUnit_Framework_TestCase
{
	public function testItDoesNothingSpecial()
	{
		$node = new TextNode('Foo bar');

		$this->assertEquals('Foo bar', $node);
	}
}
