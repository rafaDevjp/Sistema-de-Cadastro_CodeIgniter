<?php
defined('BASEPATH') OR exit('No direct script access allowed');





    class Usuarios_model extends CI_Model{

        public function show_usuarios(){
            $result = $this->db->get('usuarios_table')->result_array();
            return $result;
        }

        public function buscar($busca){
            if(empty($busca))
       		return array();

		$busca = $this->input->post('buscar');

		$this->db->like('nome', $busca)->or_like('email', $busca);
		$query = $this->db->get('usuarios_table');
		return $query->result_array();
        }

        public function create_model(){
            $now = date("Y-m-d H:i:s");
            $data_form = array(
                'nome' =>  $this->input->post('nome'),
                'email' =>  $this->input->post('email'),
                'senha' => md5($this->input->post('senha_1')),
                'at_data' => $now,
                'at_update' => $now,
            );
            $this->db->insert('usuarios_table', $data_form);
           
        }

        public function id_update($id){
            $result = $this->db->from('usuarios_table')
                               ->where('id', $id)
                               ->get()
                               ->result_array();
            return $result;
        }

        public function update_model($id){
           $dataUpdate = array(
            'nome' =>  $this->input->post('nome'),
            'email ' =>  $this->input->post('email'),
            'senha' =>  md5($this->input->post('senha_1')),
            'at_update' => date("Y-m-d H:i:s")
           );
            $this->db->where('id',  $id )
                        ->set($dataUpdate)
                        ->update('usuarios_table');
            
        }

         public function delete_model($id){
            $this->db->get_where('usuarios_table' , array('id' => $id ));
            $this->db->delete('usuarios_table', array('id' => $id));

        }





    }//END_CLASS
?>