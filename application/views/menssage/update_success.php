<?php
   defined('BASEPATH') OR exit('No direct script access allowed');

    //Esta é a pagina Update_success, esta view corresponde as menssagens de sucesso confirmadas pela ação
    // do usuário vindas do formulario apos ser submetido.
    //No caso desta menssagem, ela aparece quando um determinado item é atualizado com sucesso na lista de usuarios.        

?>

<div class="row justify-content-end p-2 position-absolute col-lg-12">
    <div class="alert alert-success alert-dismissible fade show col-3 p-3 " role="alert">
              <strong>Atualizado! </strong> dados atualizados com sucesso !
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
    </div>
</div>