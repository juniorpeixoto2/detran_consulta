<?php

defined('BASEPATH') or exit('No	direct	script	access	allowed');

class Migration_c_parametros extends CI_Migration {

    public function up() {
        /* Metodos */
        $this->dbforge->add_field(
            array(
                'par_id' => array(
                    'type' => 'INT',
                    'constraint' => 9,
                    'unsigned' => TRUE,
                    'auto_increment' => TRUE
                ),
                'par_titulo' => array(
                    'type' => 'varchar',
                    'constraint' => 900,
                    'required' => false,
                    'default' => null,
                ),
                'par_url' => array(
                    'type' => 'varchar',
                    'constraint' => 900,
                    'required' => false,
                    'default' => null,
                ),
                'par_smtpHost' => array(
                    'type' => 'varchar',
                    'constraint' => 900,
                    'required' => false,
                    'default' => null,
                ),
                'par_smtpPorta' => array(
                    'type' => 'varchar',
                    'constraint' => 5,
                    'required' => false,
                    'default' => null,
                ),
                'par_smtpSecure' => array(
                    'type' => 'varchar',
                    'constraint' => 5,
                    'comment' => 'TLS SSL',
                    'required' => false,
                    'default' => null,
                ),
                'par_smtpUsuario' => array(
                    'type' => 'varchar',
                    'constraint' => 900,
                    'required' => false,
                    'default' => null,
                ),
                'par_smtpSenha' => array(
                    'type' => 'longtext',
                    'required' => false,
                    'default' => null,
                ),
                'par_smtpSetFrom' => array(
                    'type' => 'varchar',
                    'constraint' => 900,
                    'required' => false,
                    'default' => null,
                ),
                'par_logo' => array(
                    'type' => 'varchar',
                    'constraint' => 900,
                    'required' => false,
                    'default' => null,
                ),
                'par_numZap' => array(
                    'type' => 'varchar',
                    'constraint' => 900,
                    'required' => false,
                    'default' => null,
                ),
                'par_tokenMercadoPago' => array(
                    'type' => 'varchar',
                    'constraint' => 900,
                    'required' => false,
                    'default' => null,
                ),
                'par_tokenMercadoPagoTest' => array(
                    'type' => 'varchar',
                    'constraint' => 900,
                    'required' => false,
                    'default' => null,
                ),
                'par_salaCouth' => array(
                    'type' => 'longtext',
                    'required' => false,
                    'default' => null,
                ),

                "`par_dataCadastro` TIMESTAMP DEFAULT CURRENT_TIMESTAMP",
            )
        );

        $this->dbforge->add_key('par_id', TRUE);
        $this->dbforge->create_table('parametros');

        $dadosMetodos = array(
            array(
                'par_titulo' => 'CI',
            ),
        );
        $this->db->insert_batch('parametros', $dadosMetodos);
    }

    public function down() {
        $this->dbforge->drop_table('parametros');
    }
}
