<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Juliet extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Alpha - service controller
         * issue #11
	 */
	public function index() {
            $record = $this->quotes->get(1);
            header("Content-type: application/json");
            echo json_encode($record);
        }

}
