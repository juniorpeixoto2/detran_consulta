<?php

defined('BASEPATH') or exit('No	direct	script	access	allowed');

class Migration_c_consultas extends CI_Migration {

    public function up() {
        /* Metodos */
        $this->dbforge->add_field(
            array(
                'con_id' => array(
                    'type' => 'INT',
                    'constraint' => 9,
                    'unsigned' => TRUE,
                    'auto_increment' => TRUE
                ),
                'con_tipo' => array(
                    'type' => 'varchar',
                    'constraint' => 100,
                    'required' => false,
                    'default' => null,
                ),
                'con_dados' => array(
                    'type' => 'longtext',
                    'required' => false,
                    'default' => null,
                ),
                'con_idUsuario' => array(
                    'type' => 'INT',
                    'constraint' => 9,
                    'unsigned' => TRUE,
                    'required' => false,
                    'default' => null,
                ),
                "`con_dataCadastro` TIMESTAMP DEFAULT CURRENT_TIMESTAMP",
            )
        );

        $this->dbforge->add_key('con_id', TRUE);
        $this->dbforge->create_table('consultas');

        $dadosMetodos = array(
            array(
                'met_classe' => 'consultas',
                'met_metodo' => 'index',
                'met_privado' => 1,
            ),
            array(
                'met_classe' => 'consultas',
                'met_metodo' => 'criar',
                'met_privado' => 1,
            ),
            array(
                'met_classe' => 'consultas',
                'met_metodo' => 'editar',
                'met_privado' => 1,
            ),
            array(
                'met_classe' => 'consultas',
                'met_metodo' => 'delete',
                'met_privado' => 1,
            ),
        );
        $this->db->insert_batch('metodos', $dadosMetodos);
    }

    public function down() {
        $this->dbforge->drop_table('consultas');
    }
}
