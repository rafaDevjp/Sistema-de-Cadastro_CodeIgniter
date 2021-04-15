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
            
        }

        public function id_update($id){

            $result = $this->db->select('*')
                               ->from('usuarios_table')
                               ->where('id', $id)
                               ->get()
                               ->result_array();
             return $result;
        }

        public function update_model($id){

           
             $this->input->post('nome');
             $this->input->post('email');
             md5($this->input->post('senha_1'));
            
            
            $this->db->where('id', $id);
            $this->db->update('usuarios_table', $this);
            echo $id;
            
        }

         public function delete_model($id){

            $this->db->get_where('usuarios_table' , array('id' => $id ));
            $this->db->delete('usuarios_table', array('id' => $id));
            


        }





    }//END_CLASS
?>