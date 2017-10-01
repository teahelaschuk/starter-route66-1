<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Getry
 * Date: 2017-09-30
 * Time: 10:40 PM
 */
class Welcome extends Application
{

    function __construct()
    {
        parent::__construct();
    }

    /**
     *  Bravo - default controller in subfolder
     * issue #2
     */
    public function index() {
        $this->show(2);
    }

}
