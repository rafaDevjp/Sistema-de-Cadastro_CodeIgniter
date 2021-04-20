<?php
   defined('BASEPATH') OR exit('No direct script access allowed');

   //Esta é a page de Fomulario de Edição de usuários aqui nos vamos ver 
   // um formulario ja preenchido com os dados atuais do usuário cadastrado.
   //Nesta etapa é possivel que o usuário possa atualizar as informações e 
   // submete-las novamente ao banco de dados.
   //Semelhante as outra pages esta página tambem possui um bloco de codigo
   // representado pela sua SIDEBAR ou menu lateral, para continuar com a
   // a navegação entra as pages e loog abaixo no segundo bloco contem o formulario.
 
 ?>

<section>
    <div class="container-fluid ">
        <div class="row">

        <!-- Primeiro bloco de codigo referente a SIDEBAR identico as outra pages -->
            <div class=" bg-dark" style="min-height: 100vh;">
                <ul class="list-group list-group-flush text-center">
                    <li class="list-group-item bg-dark p-3">
                        <a href="<?php echo site_url('user/usuarios') ?>"><i class="fa fa-users fa-2x text-light" aria-hidden="true"></i></a>
                    </li>
                    <li class="list-group-item bg-dark p-3">
                        <a href="<?php echo site_url('user/create') ?>"><i class="fa fa-user-plus fa-2x text-light" aria-hidden="true"></i></a>
                    </li>
                    <li class="list-group-item bg-dark p-3">
                        <a href="<?php echo site_url('user/resultado_busca') ?>"><i class="fa fa-search fa-2x text-light" aria-hidden="true"></i></a>
                    </li>
                    <li class="list-group-item bg-dark p-3">
                        <a href="<?php echo site_url('geral/home') ?>"><i class="fa fa-sign-out fa-2x text-light" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>

            <!--  -->


            <!-- Neste segundo Bloco contem ocodigo do formulario de usuarios com seus valores preenchidos -->
                <div class="col-11 p-5 text-secondary">
                        <div class="col-12 shadow p-3">

                            <h3 class="p-2">Atualizar de Usuários</h3>
                            <?php foreach($dados as $dado ):?>
                                <?php echo form_open('user/create_update/' . $dado['id'] ); ?>

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
                                        
                                        <?php if (validation_errors() ) :?>
                                            <div class="alert alert-danger" role="alert">   
                                                <span class="text-danger"><?php echo validation_errors(); ?></span>
                                            </div>
                                        <?php endif;?>
                                    </div>
                                    <?php echo form_close() ?>
                                <?php endforeach; ?>
                        </div>
                </div>

            <!--  -->
        </div>
    </div>
</section>