 <?php
   defined('BASEPATH') OR exit('No direct script access allowed');


   //Pagina Home - pagina de apresentação e entrada do sistema.
   //Esta página contem um botão com um link que direciona o usuário para a page usuarios 
   //Lá sedrá apresentada uma tabela comtendo todos os usuarios cadastrados.
 
 ?> 

 <section class="bg-banner   " >
      <div class="container-fluid " >
          <div class="row justify-content-around shadow-sm" > 
              <div class="d-flex align-self-center">
                <h3 class="text-info text-end">UserData.com</h3>
              </div>
              <div class="text-center col-lg-3 p-3">
                <a class="btn btn-outline-info col-lg-4 " href="<?php echo site_url('user/usuarios') ?>">Entar</a>
              </div>
          </div>
      </div>
 </section>