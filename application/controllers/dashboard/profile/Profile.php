<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function index()
    {

        $container = 'dashboard/profile/index_view';        
        $this->load->view('dashboard/template/layout_view', array(
            'container' => $container
        ));
    }

    public function SaveProfile()
    {       
        $request = $this->input->post();    
        $nombre = $request['nombre'];
        $apellidos = $request['apellidos'];
        $correo = $request['correo'];
        $usuario = $request['usuario'];        
        $contrasenia =  $this->encryption->encrypt($request['contrasenia']); 

        $this->setRules();
        if(!$this->form_validation->run()){           
            return false;
        }
        
        $this->load->model('Profile_model');

        if(!$this->Profile_model->SaveProfile($nombre, $apellidos,$correo,$usuario,$contrasenia)){            
            return false;
        }
        redirect(base_url('dashboard/profile'));
        return true;
    }

    private function setRules(){
        $rules = array(
            array(
                'field' => 'nombre',
                'label' => 'nombre',
                'rules' => 'required|trim'
            ),
            array(
                'field' => 'apellidos',
                'label' => 'apellidos',
                'rules' => 'required|trim'
            ),
            array(
                'field' => 'correo',
                'label' => 'correo',
                'rules' => 'required|trim|valid_email'
            ),
            array(
                'field' => 'usuario',
                'label' => 'usuario',
                'rules' => 'required|trim'
            ),
            array(
                'field' => 'contrasenia',
                'label' => 'contrasenia',
                'rules' => 'required|trim'
            )
        );

        $this->form_validation->set_rules($rules);
        $this->form_validation->set_message("valid_email", "El campo %s debe ser un email válido.");
        $this->form_validation->set_message("required", "El campo %s es requerido.");
    }


}