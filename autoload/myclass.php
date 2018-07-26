<?php

class myclass{
	public function myclass()
	{
		$this->word ='hello';
	}
	
	public function say() : string
	{
		return $this->word;
	}
}