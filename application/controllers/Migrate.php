<?php
class Migrate extends CI_Controller{






    //------------------------------------------------------------//
    //  Método index
    //------------------------------------------------------------//
    // *Esta é a função de inicialização do sistem como um todo, aqui
    //é criada as tabelas descritas na class migrations derto no DB
    // *caso ja esteja criada ela é apenas inicializada e logo após e direcionado para 
    //o controller geral con e iniciado o método home abrindo as views do sistema 
    public function index(){
        $this->load->library('migration');
        if ($this->migration->current() === FALSE){
                show_error($this->migration->error_string());
        }

        return redirect('geral/home');
    }
}

?>