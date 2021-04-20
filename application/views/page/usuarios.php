<?php
   defined('BASEPATH') OR exit('No direct script access allowed');

   // Esta é a Página de usuários, ela lista todos os usuarios cadastrados
   // Ela tem com objetivo mostrar os usuarios cadastrados no banco de dados 
   // Tambem possui um Menu lateral que possibilita os usuarios navegar no sistema
   // Outro elemento presente é o Search ou Busca, um campo do tipo INPUT onde o 
   // o usuario pode digitar um nome e submeter a busca, se encontrado, o usuario
   // poderar ver em uma lista (TABELA) o item procurado e sues semelhantes
 
 ?>

<section>
   
    <div class="container-fluid ">
     
        <div class="row">

         <!-- Este primeiro Bloco podemos ver todos os links de paginas referente as navegações do sistema
         Este bloco corresponde ao SIDEBAR ou menu lateral, ele tbm estrá presente em todas as outras pages -->

            <div class=" bg-dark" style="min-height: 100vh;">

                <ul class="list-group list-group-flush text-center">
                    <li class="list-group-item bg-dark p-3" title="Página Usuário">
                        <a href="<?php echo site_url('user/usuarios') ?>"><i class="fa fa-users fa-2x text-warning" aria-hidden="true"></i></a>
                    </li>
                    <li class="list-group-item bg-dark p-3" title="Página Cadastro">
                        <a href="<?php echo site_url('user/cadastro') ?>"><i class="fa fa-user-plus fa-2x text-light" aria-hidden="true"></i></a>
                    </li>
                    <li class="list-group-item bg-dark p-3" title="Página Buscar/Resultado">
                    <a href="<?php echo site_url('user/resultado_busca') ?>"><i class="fa fa-search fa-2x text-light" aria-hidden="true"></i></a>
                    </li>
                    <li class="list-group-item bg-dark p-3" title="Sair" >
                        <a href="<?php echo site_url('geral/home') ?>"><i class="fa fa-sign-out fa-2x text-light" aria-hidden="true"></i></a>
                    </li>
                </ul>
            
            </div>
            <!--  -->


                <div class="col-11 p-5 text-secondary  justify-content-center">
          

            <!-- Neste segundo Bloco podemos ver o Codigo do elemento de busca, ele tambem estará presente em outa página
                 aqui o usuario pode digitar o nome que esta procurando na lista   -->

                <form action="<?php echo site_url('user/resultado_busca')?>" method="post" class="form-inline my-2 my-lg-0 pb-3">
                    <input class="form-control mr-sm-2" type="search" placeholder="Ex. nome ou email" name="buscar" aria-label="Search">
                    <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Buscar Usuário</button>
                </form>
            <!--  -->


            <!--Neste terceiro é último bloco temos o elemento preincipal, a tabela de Usuários
                aqui será listado todos os usuário cadstrados, tambem será possivel editar ou deletar o usuario 
                ultilizando os botõe que estão localizado no final de cada linha -->


                        <div class="col-12 shadow p-3 ">
                            <h3 class="p-2">Lista de usuários</h3>
                            <table class="table  table-hover text-secondary">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">DataCadastro</th>
                                        <th scope="col">UltimoUpdate</th>
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
                                        <td><?php echo $usuario['at_update']?></td>
                                        <td>
                                            <a href="<?php echo site_url('user/update_usuario/' . $usuario['id'])?>" class="p-2 m-2"><i class="fa fa-pencil text-info" aria-hidden="true"></i></a>
                                            <a href="<?php echo site_url('user/delete/' . $usuario['id'])?>" class="p-2 m-2"><i class="fa fa-trash-o text-danger" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                <? endforeach;?>
                                </tbody>
                            </table>
                        </div>

                <!--  -->

                </div>
        </div>
    </div>
</section>