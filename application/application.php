<?php

namespace application;

/**
 * Application class to set up needed files and class
 * 
 * @author stevleibelt
 * @since 2012-10-28
 */
Class application
{
	/**
	 * @author stevleibelt
	 * @var \modex\Output
	 * @since 2012-10-28
	 */
	private $output;

	/**
	 * Creates application.
	 * 
	 * @author stevleibelt
	 * @since 2012-10-28
	 */
	public function __construct()
	{
		require 'phar://example.phar/model/output.php';

		$this->output = new \model\Output();
		
		$this->output->add('application started at:' . date('Y-m-d H:i:s'));
		$this->output->add('----');
		$this->output->add('');
	}

	/**
	 * Calls the output.
	 * 
	 * @author stevleibelt
	 * @since 2012-10-28
	 */
	public function __destruct()
	{
		$this->output->add('');
		$this->output->add('----');
		$this->output->add('application stopped at:' . date('Y-m-d H:i:s'));

		$this->output->get();
	}

	/**
	 * Main function to implement fluent interface.
	 * @author stevleibelt
	 * @return \self
	 * @since 2012-10-28
	 */
	static public function create()
	{
		return new self();
	}

	/**
	 * Runs the application.
	 * 
	 * @author stevleibelt
	 * @since 2012-10-28
	 */
	public function run()
	{
		$this->output->add('No message is a good message.');
	}
}
