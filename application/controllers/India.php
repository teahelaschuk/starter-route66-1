<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Getry
 * Date: 2017-09-30
 * Time: 11:15 PM
 */

class India extends CI_Controller
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
        // The following should be a relative link to your image file above
        $source = '../data/puppy.jpg';
// note that we could have referenced an image anywhere on our system

// set the mime type for that image (jpeg, png, etc)
        header("Content-type: image/jpg");
        header('Content-Disposition: inline');
        readfile($source); // dish it
    }

}