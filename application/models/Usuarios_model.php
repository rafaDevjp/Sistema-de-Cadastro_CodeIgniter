<?php
defined('BASEPATH') OR exit('No direct script access allowed');





    class Usuarios_model extends CI_Model{

        public function show_usuarios(){

            $result = $this->db->select('*')->from('usuarios_table')->get()->result_array();
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

        // public function update_model($id){

        //     $result =  $this->db->get_where('usuarios_table' , array('id' => $id ))->result_array();
        //     return $result;
        // }

         public function delete_model($id){

            $this->db->get_where('usuarios_table' , array('id' => $id ));
            $this->db->delete('usuarios_table', array('id' => $id));
            


        }





    }//END_CLASS
?>