<?php

namespace pcfreak30\ComposePress\Abstracts;

/**
 * Class BaseObjectMock
 *
 * @package pcfreak30\ComposePress\Abstracts
 * @property string $test
 */
class BaseObjectMock extends BaseObject {
	private $test = 'test';

	/**
	 * @return mixed
	 */
	public function get_test() {
		return $this->test;
	}

	/**
	 * @param string $test
	 */
	public function set_test( $test ) {
		$this->test = $test;
	}

	public function init() {

	}
}