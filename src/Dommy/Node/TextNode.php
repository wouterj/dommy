<?php

namespace Dommy\Node;

/**
 * This class represents a TextNode. This node is the last node in a branch
 *
 * @author Wouter J <wouter@wouterj.nl>
 */
class TextNode implements NodeInterface
{
	private $text;

	/**
	 * @param string $text The value of the TextNode
	 */
	public function __construct($text)
	{
		$this->setText($text);
	}

	/**
	 * {@inheritdoc}
	 *
	 * @throws \BadMethodCallException Because a TextNode cannot have children
	 */
	public function addChild(NodeInterface $node)
	{
		throw new \BadMethodCallException('A TextNode is the end of a branch in the DOM Tree, it cannot have children.');
	}

	/**
	 * @param string $text The value of the TextNode
	 */
	public function setText($text)
	{
		$this->text = $text;
	}

	/**
	 * @return string
	 */
	public function getText()
	{
		return $this->text;
	}

	public function __toString()
	{
		return $this->getText();
	}
}
