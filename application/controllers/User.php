
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {





    //------------------------------------------------------------//
    //  Método usuarios 
    //------------------------------------------------------------//
    //Esta função recebe todos os itens do DB e apresenta na page usuarios
	public function usuarios(){
        $this->load->model('usuarios_model');
        $data['dados'] = $this->usuarios_model->show_usuarios();
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('page/usuarios', $data);
        $this->load->view('template/footer');
	       
	}



    //------------------------------------------------------------//
    //  Método resultado_busca 
    //------------------------------------------------------------//
    //esta função faz a busca atravez do model para trazer os itens descritos
    //no INPUT  e apresenta na page resltado
    public function resultado_busca(){
        $this->load->model('usuarios_model');
        $data['dados'] = $this->usuarios_model->buscar($_POST);
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('page/resultado', $data);
        $this->load->view('template/footer');
        
    }



    //------------------------------------------------------------//
    //  Método cadastro
    //------------------------------------------------------------//
    //Esta é a função de apresentação da pagina de cadastro 
    public function cadastro(){
        $this->load->helper(array('form'));
        $this->load->library('form_validation');
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('page/cadastro');
        $this->load->view('template/footer');
        
    }



    //------------------------------------------------------------//
    //  Método create
    //------------------------------------------------------------//
    //Este é o metodo create, serve para receber e validar os dados submetidos no formualrio
    //na page cadastro, nele é iniciado um helper de formulario e uma biblioteca de validação,
    //caso esja validado com sucesso os daddos é inserido no metodo create_model e depois salvo no DB,
	public function create(){
        $this->load->helper(array('form'));
        $this->load->library('form_validation');

        // Apos as libs e helpers serem carregados
        // os dados são validados de acordo com os campos abaixo
        // aqui contem as regras de formularios descritos pela regra de negócio do sistema
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
            

            //aqui é estabelecidas as condições
            //se não correspoder aos oscritérios
            // o fluxo volta para page cadastro e retona 
            //um erro correpondente ao q não pode ser validado
            
            if ($this->form_validation->run() == FALSE){
              $this->cadastro();
            }
            else{

            //se passar por todos os critérios o model "usuarios_model"
            //é carregado e chamando o método "create_model"
            // para inserir os dados, depois é chmado o método
            // "show_usuarios" e as views de ususrios retonado para 
            //a lista de usuarios exibindo uma menssagem de sucesso

                $this->load->model('usuarios_model');
                $this->usuarios_model->create_model();
                //
                $data['dados'] = $this->usuarios_model->show_usuarios();
                $this->load->view('template/header');
                $this->load->view('template/navbar');
                $this->load->view('menssage/save_success');
                $this->load->view('page/usuarios', $data);
                $this->load->view('template/footer');
                

            }
	}



    //------------------------------------------------------------//
    //  Método update_usuarios 
    //------------------------------------------------------------//
    //O método upadate_usuário é muito semelhante ao 
    //metodo "cadastro"  ele apreenta a view de formulario, 
    //mas a diferenca é q ele recebe um valor ID trazendo os valores 
    //correspondetes e preenchendo os capos do formulario
    public function update_usuario($id){

        $this->load->helper(array('form'));
        $this->load->library('form_validation');

        //metodos e views de aresentação (retorna para page usuarios)
        //uma menssagem de sucesso
        $this->load->model('usuarios_model');
        $data['dados'] = $this->usuarios_model->id_update($id);
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('page/form_update', $data);
        $this->load->view('template/footer');
       
        
    }



    //------------------------------------------------------------//
    //  Método create_update
    //------------------------------------------------------------//
    //*Este método tem a mesma logca do métdo "create"
    // recebe os dados correspondentes ao ID e passsao
    // pelo mesmo precesso de validação e condição
    //*Se validado, será carregado o model "usuarios_model"
    // e será inserido no método "udate_model", se aso nao for
    // validao retorna para a page form_update com os erros de vaidação

    public function create_update($id){
        $this->load->helper(array('form'));
        $this->load->library('form_validation');

            // Apos as libs e helpers serem carregados
            // os dados são validados de acordo com os campos abaixo
            // aqui contem as regras de formularios descritos pela regra de negócio do sistema
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


            //condição das validações 
            if ($this->form_validation->run() == FALSE){
                    $this->update_usuario($id);
            }
            else{
              $this->load->model('usuarios_model');
              $this->usuarios_model->update_model($id);
                
                //metodos e views de aresentação (retorna para page usuarios)
                //uma menssagem de sucesso
                $data['dados'] = $this->usuarios_model->show_usuarios();
                $feedBack = ['feed' => TRUE];
                $this->load->view('template/header');
                $this->load->view('template/navbar');
                $this->load->view('menssage/update_success');
                $this->load->view('page/usuarios', $data, $feedBack);
                $this->load->view('template/footer');
            }
	}



    //------------------------------------------------------------//
    //  Método Delete
    //------------------------------------------------------------//
    // *Este método é acionado quando o 
    //usuario deseja deleta um item da tabela
    //ele recebe um ID correspondente aos dados que sera deletado
    // *inicialmente ele carrega o o model "usuarios_model" e 
    //chama o método "delete_model", este método tabem recebe um ID 
    //que correpondera ao item q serão deletados.
    // *Apos deletos e chamado o método "show_usuarios" e as views
    //de apresentaçao "usuarios" retornando um feedback de sucesso 

    public function delete($id){
        $this->load->model('usuarios_model');
        $this->usuarios_model->delete_model($id);
        //metodos e views de aresentação (retorna para page usuarios)
        //uma menssagem de sucesso
        $data['dados'] = $this->usuarios_model->show_usuarios();
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('menssage/delete_success');
        $this->load->view('page/usuarios', $data);
        $this->load->view('template/footer');

    }






}//END_CLASS