<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
?>

<section>
   
    <div class="container-fluid ">
        <div class="row">
            <div class=" bg-dark" style="min-height: 100vh;">
            
                <ul class="list-group list-group-flush text-center">
                    <li class="list-group-item bg-dark p-3">
                        <a href="<?php echo site_url('user/usuarios') ?>"><i class="fa fa-users fa-2x text-light" aria-hidden="true"></i></a>
                    </li>
                    <li class="list-group-item bg-dark p-3">
                        <a href="<?php echo site_url('user/create') ?>"><i class="fa fa-user-plus fa-2x text-warning" aria-hidden="true"></i></a>
                    </li>
                    <li class="list-group-item bg-dark p-3">
                    <a href="<?php echo site_url('user/resultado_busca') ?>"><i class="fa fa-search fa-2x text-light" aria-hidden="true"></i></a>
                    </li>
                    <li class="list-group-item bg-dark p-3">
                        <a href="<?php echo site_url('geral/home') ?>"><i class="fa fa-sign-out fa-2x text-light" aria-hidden="true"></i></a>
                    </li>
                </ul>
            
            </div>
                <div class="col-11 p-5 text-secondary">
                        <div class="col-12 shadow p-3">
                            <h3 class="p-2">Cadastro de Usuários</h3>
                                
                                <?php echo form_open('user/create') ?>
                                    <div class="row">

                                        <div class="col-lg-6 form-group">
                                            <label for="">Nome</label>
                                            <input type="text" class="form-control" name="nome"  >
                                        </div>
                                        <div class="col-lg-6 form-group">
                                            <label for="">Email</label>
                                            <input type="email" class="form-control" name="email"  >
                                        </div>
                                        <div class="col-lg-6 form-group">
                                            <label for="">Senha</label>
                                            <input type="password" class="form-control" name="senha_1" >
                                        </div>
                                        <div class="col-lg-6 form-group">
                                            <label for="">Senha Confirm</label>
                                            <input type="password" class="form-control" name="senha_2"  >
                                        </div>
                                        <div class="col-12 form-group pt-2">
                                            <input type="submit" class="btn btn-info" value="Cadastrar novo Usuário" >
                                        </div>

                                        <?php if (validation_errors() ) :?>
                                            <div class="alert alert-danger" role="alert">   
                                                <span class="text-danger"><?php echo validation_errors(); ?></span>
                                            </div>

                                            <div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center" style="height: 200px;">

                                            <!-- Then put toasts within -->
                                            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                                                <div class="toast-header">
                                                <img src="..." class="rounded mr-2" alt="...">
                                                <strong class="mr-auto">Bootstrap</strong>
                                                <small>11 mins ago</small>
                                                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>
                                                <div class="toast-body">
                                                Hello, world! This is a toast message.
                                                </div>
                                            </div>
                                            </div>
                                            
                                        <?php endif;?>

                                        
                                    </div>
                                </form>
                            
                        </div>
                </div>
        </div>
    </div>
</section>