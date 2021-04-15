<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_blog extends CI_Migration {

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
                        )
                ));

                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('usuarios_table');
        }

        public function down()
        {
                $this->dbforge->drop_table('usuarios_table');
        }
}