<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_model extends CI_Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';

    public function SaveProfile($nombre, $apellidos,$correo,$usuario,$contrasenia){

    
        $data = array(
            'name' => $nombre,
            'lastname' => $apellidos,
            'email' => $correo,
            'username' => $usuario,
            'password' => $contrasenia,
            'active' => '1'
        );

        $cod = $this->db->insert('users', $data);
        if(!$cod){
            return false;
        }
        return true;
    
    }

    


}