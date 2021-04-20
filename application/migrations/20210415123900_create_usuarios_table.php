<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_Usuarios_table extends CI_Migration {





        
        //------------------------------------------------------------//
        //  Método UP
        //------------------------------------------------------------//
        //Este é o método que cria as tabelas no banco de dados com as caracteristicas
        //Dessa forma é desnecessarios escrever codigos SQL ou utilizar algum set de SQL
        //Ao carregar o Sistema a tabela será inserida no banco junto com uma tabela
        //chamada migrations, que contem os regidtros de tabelas criadas 
        //Classe migrations enfatisa na criação das tabelas no banco de dados
        //O array abaixo correspondem aos compos da tabela q sera adicionada no banco de dados
        public function up()
        {
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => 12,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'nome' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'email' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255',
                        ),
                        'senha' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '50',
                        ),
                        'at_data' => array(
                                'type' => 'DATETIME',
                                'current_timestamp' => TRUE,
                        ),
                        'at_update' => array(
                                'type' => 'DATETIME',
                                 'on_update current_timestamp' => TRUE
                        )
                ));

                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('usuarios_table');
        }

        public function down(){
                $this->dbforge->drop_table('usuarios_table');
        }
}