<?php
defined('BASEPATH') OR exit('No direct script access allowed');





    class Usuarios_model extends CI_Model{

        public function show_usuarios(){

          $result =   $this->db->select('*')->from('usuarios_table')->get()->result_array();


           return $result;
        }

        public function create_model(){

            

            $data_form = array(
                'nome' =>  $this->input->post('nome'),
                'email' =>  $this->input->post('email'),
                'senha' => md5($this->input->post('senha_1')),
                // 'at_data' => $date 
            );

            $this->db->insert('usuarios_table', $data_form);
             echo "Cadastrado no DB com Sucesso!!!!!" ;
        }





    }//END_CLASS
?>