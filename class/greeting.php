<?php

class Greeting
{
	private $word;

	function __construct()
	{
		$this->word = '...';
	}

	public function say()
	{
		printf("%s\n", $this->word);
	}

	public function setWordAndSay($word)
	{
		$this->word = $word;
		$this->say();
	}
}

$greeting = new Greeting();
$greeting->say();

$greeting->setWordAndSay("Good morning");
