<?php
/*
|--------------------------------------------------------------------------
| CI_Context library
|--------------------------------------------------------------------------
|
| Once upon a time this class came to life to get your CI context.
|
| @author Jeremie Ges
| @date 25/02/2013
| @version 0.1
|
*/
class CI_Context {

	protected $CI;

	public function __construct() {
		// Load CI system
		$this->CI =& get_instance();

	}

	public function __get($key) {
		return $this->CI->$key;
	}

	

}
?>