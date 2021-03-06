<?php
/**
 * Slideshare exception class.
 *
 * @package   SlideshareException
 * @author    Spoon <spoon4@gmail.com>
 * @license   GPL-2.0+
 * @link      https://github.com/Spoon4/slideshare-api-import
 * @copyright 2014 Spoon
 *
 * @since    1.0.0
 */
class SlideshareException extends Exception
{
	private $label;
	
	/**
	 * Constructor
	 *
	 * @param string $label The error label
	 * @param string $message The error message
	 *
	 * @since    1.0.0
	 */
	public function __construct($label, $message)
	{
		$this->label = $label;
		parent::__construct($message);
	}
	
	/**
	 * Get label
	 *
	 * @return string The error label
	 *
	 * @since    1.0.0
	 */
	public function getLabel()
	{
		return $this->label;
	}
}