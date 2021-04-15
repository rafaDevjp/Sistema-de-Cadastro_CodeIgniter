
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function usuarios(){
        $this->load->model('usuarios_model');
        $data['dados'] = $this->usuarios_model->show_usuarios();

        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('page/usuarios', $data);
        $this->load->view('template/footer');
	       
	}

    public function cadastro(){
        $this->load->helper(array('form'));
        $this->load->library('form_validation');

        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('page/cadastro');
        $this->load->view('template/footer');
        
    }
	public function create(){
        $this->load->helper(array('form'));
        $this->load->library('form_validation');
            //validação dos campos de Formulário
            $data_form = array(
                array(
                    'field' => 'nome',
                    'label' => 'nome',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'email',
                    'label' => 'email',
                    'rules' => 'required|valid_email'
                ),
                array(
                    'field' => 'senha_1',
                    'label' => 'Senha',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'senha_2',
                    'label' => 'Senha Confirm',
                    'rules' => 'required|matches[senha_1]'
                )
            );
            $this->form_validation->set_rules($data_form);

            if ($this->form_validation->run() == FALSE){
              $this->cadastro();
            }
            else{
              $this->load->model('usuarios_model');
              $this->usuarios_model->create_model();
               $this->usuarios();
            }
	}

    public function update_usuario($id){

        
    }

    public function deletar_usuario($id){

             $this->db->get_where('usuarios_table' , array('id' => $id ));
             $this->db->delete('usuarios_table', array('id' => $id));
             $this->usuarios();


        }






}//END_CLASS