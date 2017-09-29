<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Force extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Alpha - regular controller
         * issue #2 
	 */
	public function index() {
            $this->show(4);
        }

}
