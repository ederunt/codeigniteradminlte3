<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class CheckAuthenticated
{
    private $CI;

    private $excludeController = array(
        'login', 'logout'
    );

    public function __construct()
    {
       $this->CI = &get_instance();

       !$this->CI->load->library('session') ? $this->CI->load->library('session') : false;
    }

    public function execute(){
        $controller = $this->CI->router->fetch_class();

        if(in_array($controller, $this->excludeController)){
            return;
        }

        if(!$this->CI->session->userdata('isLogged')){
            redirect('login');
        }
    }
}