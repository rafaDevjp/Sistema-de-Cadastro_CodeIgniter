<?php
   defined('BASEPATH') OR exit('No direct script access allowed');

    //Esta é a pagina cadstro, aqui o usuário poderá cadstrar todos os dados descritos nos campos
    //Como nas outras pages, esta pagina tambem com tem em seu primeiro bloco de codigo a SIDEBAR
    // e logo abaixo seus campos de formuário         

?>

<section>
  
    <div class="container-fluid ">
        <div class="row">

        <!-- Este é o primeiro bloco de codigo da pagina referente a SIDEBAR
             aqui o usuário é possibilitado de navegar entre a views do Sistema -->
            <div class=" bg-dark" style="min-height: 100vh;">
                <ul class="list-group list-group-flush text-center">
                    <li class="list-group-item bg-dark p-3">
                        <a href="<?php echo site_url('user/usuarios') ?>"><i class="fa fa-users fa-2x text-light"
                                aria-hidden="true"></i></a>
                    </li>
                    <li class="list-group-item bg-dark p-3">
                        <a href="<?php echo site_url('user/create') ?>"><i class="fa fa-user-plus fa-2x text-warning"
                                aria-hidden="true"></i></a>
                    </li>
                    <li class="list-group-item bg-dark p-3">
                        <a href="<?php echo site_url('user/resultado_busca') ?>"><i
                                class="fa fa-search fa-2x text-light" aria-hidden="true"></i></a>
                    </li>
                    <li class="list-group-item bg-dark p-3">
                        <a href="<?php echo site_url('geral/home') ?>"><i class="fa fa-sign-out fa-2x text-light"
                                aria-hidden="true"></i></a>
                    </li>
                </ul>

            </div>
        <!--  -->

        <!-- Este é o segundo bloco de codigo, este represente todo o formulario da view cadastro
                dentro deste bloco e possivel identificar um pequeno bloco de codigo on contem uma
                logico baseada em PHP, esta logica se refere aos feedbacks que o usuaio recebe em
                caso de erro na hora de cadastrar o usuario ou se nao coresponder con os critéris 
                estabelecidos pelo formulario, estemesmo bloco contem na page form_Update -->

            <div class="col-11 p-5 text-secondary">
                <div class="col-12 shadow p-3">
                    <h3 class="p-2">Cadastro de Usuários</h3>
                <!-- bloco de feedback do sistema com o usuário -->
                    <?php if (validation_errors() ) :?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Errors! </strong>  <?php echo validation_errors(); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif;?>
                <!--  -->
                <!-- E logo abaixo o bloco de formulario -->
                    <?php echo form_open('user/create') ?>
                    <div class="row">

                        <div class="col-lg-6 form-group">
                            <label for="">Nome</label>
                            <input type="text" class="form-control" name="nome">
                        </div>
                        <div class="col-lg-6 form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                        <div class="col-lg-6 form-group">
                            <label for="">Senha</label>
                            <input type="password" class="form-control" name="senha_1">
                        </div>
                        <div class="col-lg-6 form-group">
                            <label for="">Senha Confirm</label>
                            <input type="password" class="form-control" name="senha_2">
                        </div>
                        <div class="col-12 form-group pt-2">
                            <input type="submit" class="btn btn-info" value="Cadastrar novo Usuário">
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>