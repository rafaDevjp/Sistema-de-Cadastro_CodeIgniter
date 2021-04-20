<?php
defined('BASEPATH') OR exit('No direct script access allowed');





    class Usuarios_model extends CI_Model{



        //------------------------------------------------------------//
        //  Método shoe_usuarios
        //------------------------------------------------------------//
        // *Este método busca no canco todo os itens cadadstrados, retornando 
        //uma variavel do tipo array
        public function show_usuarios(){
            $result = $this->db->get('usuarios_table')->result_array();
            return $result;
        }




        //------------------------------------------------------------//
        //  Método Buscar
        //------------------------------------------------------------//
        // *O método recebe um dado chamado busca via input-post,
        //este dado é comparado com os dados salvos, se encontrado
        //é retornado um array com os valores correspondentes.
        //na consulta é posivel ver que o método like é submetido
        //a duas codições, comparados ao nome e email, desta forma
        //é possivel fazer buscas por nome ou emails
        public function buscar($busca){
            if(empty($busca))
       		return array();

		$busca = $this->input->post('buscar');

		$this->db->like('nome', $busca)->or_like('email', $busca);
		$query = $this->db->get('usuarios_table');
		return $query->result_array();
        }




        //------------------------------------------------------------//
        //  Método create_model
        //------------------------------------------------------------//
        //Método de criação dos novos item/usuarios
        //o Método insert recebe os dados do arrray $DATA_FORM e
        //adiciona na tabela usuarios_table
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



        
        //------------------------------------------------------------//
        //  Método id_update
        //------------------------------------------------------------//
        // *Este método busca no banco o usuario referente ao ID 
        //que é recebido do controler e retorna um array com os 
        //dados correspondentes e inicia o form_update
        public function id_update($id){
            $result = $this->db->from('usuarios_table')
                               ->where('id', $id)
                               ->get()
                               ->result_array();
            return $result;
        }




        
        //------------------------------------------------------------//
        //  Método update_model
        //------------------------------------------------------------//
        // *Método de atualização dos dados que 
        //correspondem ao ID recebido, método 
        //semelhante ao create_model
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



        
        //------------------------------------------------------------//
        //  Método delelte_model
        //------------------------------------------------------------//
        // *Função que recebe um ID como parametro,
        //este ID serve como referencia para buscar 
        //os dados que serão deletados
         public function delete_model($id){
            $this->db->get_where('usuarios_table' , array('id' => $id ));
            $this->db->delete('usuarios_table', array('id' => $id));

        }





    }//END_CLASS
?>