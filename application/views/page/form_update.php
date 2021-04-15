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
                        <a href=""><i class="fa fa-search fa-2x text-light" aria-hidden="true"></i></a>
                    </li>
                    <li class="list-group-item bg-dark p-3">
                        <a href="<?php echo site_url('geral') ?>"><i class="fa fa-sign-out fa-2x text-light" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
                <div class="col-11 p-5 text-secondary">
                        <div class="col-12 shadow p-3">
                            <h3 class="p-2">Atualizar de Usuários</h3>
                            <?php foreach($dados as $dado ):?>
                                <?php echo form_open('user/create/' . $dado['id'] ); ?>
                                    <div class="row">
                                        <div class="col-lg-6 form-group">
                                            <label for="">Nome</label>
                                            <input type="text" class="form-control" name="nome" value="<?php echo $dado['nome'] ?>"   >
                                        </div>
                                        <div class="col-lg-6 form-group">
                                            <label for="">Email</label>
                                            <input type="email" class="form-control" name="email" value="<?php echo $dado['email'] ?>" >
                                        </div>
                                        <div class="col-lg-6 form-group">
                                            <label for="">Senha</label>
                                            <input type="password" class="form-control" name="senha_1" value="<?php echo $dado['senha'] ?>" >
                                        </div>
                                        <div class="col-lg-6 form-group">
                                            <label for="">Senha Confirm</label>
                                            <input type="password" class="form-control" name="senha_2"  value="<?php echo $dado['senha'] ?>">
                                        </div>
                                        
                                        <div class="col-12 form-group pt-2">
                                            <input type="submit" class="btn btn-info" value="Cadastrar novo Usuário" >
                                        </div>
                                        <span class="text-danger"><?php echo validation_errors(); ?></span>
                                    </div>
                                    <?php echo form_close() ?>
                                <?php endforeach; ?>
                        </div>
                </div>
        </div>
    </div>
</section>