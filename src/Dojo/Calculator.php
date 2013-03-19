<?php

namespace Dojo;

class Calculator
{
	private $input;
	public function enter($number)
	{
		$this->input .= (string)$number;
	}
	public function display()
	{
		return (int)$this->input;
	}
}
