<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
 
 ?>

<section>
   
    <div class="container-fluid ">
<<<<<<< HEAD
        <div class="row ">
=======
        <div class="row">
>>>>>>> e30d9ae1db603d632af968785fd68b617cc02149
            <div class=" bg-dark" style="min-height: 100vh;">

                <ul class="list-group list-group-flush text-center">
                    <li class="list-group-item bg-dark p-3">
                        <a href="<?php echo site_url('user/usuarios') ?>"><i class="fa fa-users fa-2x text-warning" aria-hidden="true"></i></a>
                    </li>
                    <li class="list-group-item bg-dark p-3">
                        <a href="<?php echo site_url('user/cadastro') ?>"><i class="fa fa-user-plus fa-2x text-light" aria-hidden="true"></i></a>
                    </li>
                    <li class="list-group-item bg-dark p-3">
                        <a href=""><i class="fa fa-search fa-2x text-light" aria-hidden="true"></i></a>
                    </li>
                    <li class="list-group-item bg-dark p-3">
                        <a href="<?php echo site_url('geral/home') ?>"><i class="fa fa-sign-out fa-2x text-light" aria-hidden="true"></i></a>
                    </li>
                </ul>
            
            </div>
                <div class="col-11 p-5 text-secondary  justify-content-center">
                        <div class="col-12 shadow p-3 ">
                            <h3 class="p-2">Lista de usuários</h3>
                            <table class="table  table-hover text-secondary">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">DataCadastro</th>
                                        <th scope="col">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach($dados as $usuario) :?>
                                    <tr>
                                        <th scope="row"><?php echo $usuario['id']?></th>
                                        <td><?php echo $usuario['nome']?></td>
                                        <td><?php echo $usuario['email']?></td>
                                        <td><?php echo $usuario['at_data']?></td>
                                        <td>
                                            <a href="<?php echo site_url('user/update_usuario/' . $usuario['id'])?>" class="p-2 m-2"><i class="fa fa-pencil text-info" aria-hidden="true"></i></a>
                                            <a href="<?php echo site_url('user/delete/' . $usuario['id'])?>" class="p-2 m-2"><i class="fa fa-trash-o text-danger" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                <? endforeach;?>
                                </tbody>
                            </table>
                        </div>
                </div>
        </div>
    </div>
</section>