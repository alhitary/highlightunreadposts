<?php
/**
 *
 * Highlight Unread Posts
 *
 * @copyright (c) 2015 Wolfsblvt ( www.pinkes-forum.de )
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 * @author Clemens Husung (Wolfsblvt)
 */

namespace wolfsblvt\highlightunreadposts\tests\testframework;

abstract class test_case extends \phpbb_test_case implements \wolfsblvt\highlightunreadposts\tests\test_data_collection
{
	/** @var \wolfsblvt\highlightunreadposts\tests\testframework\reflector_helper */
	public $reflector;

	/**
	 * {@inheritdoc}
	 */
	public function setUp()
	{
		parent::setUp();

		// Set up our reflector helper
		$this->reflector = new reflector_helper();
	}
}
