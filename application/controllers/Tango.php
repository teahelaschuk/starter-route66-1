<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Getry
 * Date: 2017-09-30
 * Time: 10:59 PM
 */
class Tango extends Application
{

    function __construct()
    {
        parent::__construct();
    }

    /**
     * Golf - regular expression remapped
     * issue #8
     */
    public function index() {
        $this->show(5);
    }

}