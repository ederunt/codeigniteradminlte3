<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller
{
    public function index()
    {
        $container = 'dashboard/users/index_view';

        $this->load->view('dashboard/template/layout_view', array(
            'container' => $container
        ));
    }
}