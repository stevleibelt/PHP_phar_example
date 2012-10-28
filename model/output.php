<?php

namespace model;

/**
 * Model class to handle the application output.
 * 
 * @author stevleibelt
 * @since 2012-10-28
 */
class output
{
	/**
	 * @author stevleibelt
	 * @since 2012-10-28
	 * @var string
	 */
	private $outputBuffer;

	/**
	 * Constructor of the class.
	 * 
	 * @author stevleibelt
	 * @since 2012-10-28
	 */
	public function __construct() 
	{
		$this->outputBuffer = '';
	}

	/**
	 * Adds the $output as string to the output buffer.
	 * 
	 * @author stevleibelt
	 * @param mixed $output (typecasted to string)
	 * @since 2012-10-28
	 */
	public function add($output)
	{
		echo $this->outputBuffer .= (string) $output . PHP_EOL;
	}

	/**
	 * Returns the output buffer
	 * 
	 * @author stevleibelt
	 * @return string
	 * @since 2012-10-28
	 */
	public function get()
	{
		return $this->outputBuffer;
	}
}
