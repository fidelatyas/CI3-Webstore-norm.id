<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Sambutramadhan extends CI_Controller
{
    private $_patient;
    private $_setting;
    private $_lang;
    private $_view_popup;

    public function __construct()
    {
        parent:: __construct();
    }




    /* Public Function Area */
    public function index()
    {
        $this->load->view('sambutramadhan', array());
    }
    /* End Public Function Area */




    /* Ajax Area */
    /* End Ajax Area */




    /* Private Function Area */
    /* End Private Function Area */
}