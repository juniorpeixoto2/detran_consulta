<?php

defined('BASEPATH') OR exit('No	direct	script	access	allowed');

class Migration_c_usuarios extends CI_Migration {

    public function up() {

        $this->dbforge->add_field(
                array(
                    'usu_id' => array(
                        'type' => 'INT',
                        'constraint' => 9,
                        'unsigned' => TRUE,
                        'auto_increment' => TRUE
                    ),
                    'usu_nome' => array(
                        'type' => 'VARCHAR',
                        'constraint' => 900,
                        'required' => false,
                        'default' => null,
                    ),
                    'usu_email' => array(
                        'type' => 'VARCHAR',
                        'constraint' => 900,
                        'required' => false,
                        'default' => null,
                    ),
                    'usu_senha' => array(
                        'type' => 'LONGTEXT',
                    ),
                    'usu_erroLogin' => array(
                        'type' => 'INT',
                        'constraint' => 9,
                        'unsigned' => TRUE,
                        'comment' => 'tentativas de login com erro',
                        'required' => false,
                        'default' => null,
                    ),
                    'usu_dataBloqueio' => array(
                        'type' => 'TIMESTAMP',
                        'comment' => 'horario do bloqueio',
                        'required' => false,
                        'default' => null,
                    ),
                    'usu_status' => array(
                        'type' => 'VARCHAR',
                        'constraint' => 100,
                        'required' => true,
                        'DEFAULT' => 'ATIVO',
                    ),
                    "`usu_dataCadastro` TIMESTAMP DEFAULT CURRENT_TIMESTAMP",
        ));

        $this->dbforge->add_key('usu_id', TRUE);
        $this->dbforge->create_table('usuarios');

        $sql = "
        CREATE TABLE IF NOT EXISTS `ci_sessions` (
        `id` varchar(128) NOT NULL,
        `ip_address` varchar(45) NOT NULL,
        `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
        `data` blob NOT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8;";

        $this->db->query($sql);


        $data = array(
            array(
                'usu_nome' => '1',
                'usu_email' => '1',
                'usu_senha' => '3d5206f1b5757ce03470550764f2d514af1bed75780180186f087c4af13d486a1043edca1ed20aac035fd980950061e2f'
                . '7c639ce99082958ca29b1c9b5d71d2d+FYHykmCiQu1gmymbjQxRGXsBbDe3C+XgYVZnLhWUZQ=',
            ),
        );
        $this->db->insert_batch('usuarios', $data);

        /*  Tabela de Perfis  */
        $this->dbforge->add_field(
                array(
                    'per_id' => array(
                        'type' => 'INT',
                        'constraint' => 9,
                        'unsigned' => TRUE,
                        'auto_increment' => TRUE
                    ),
                    'per_nome' => array(
                        'type' => 'VARCHAR',
                        'constraint' => 900,
                        'required' => false,
                        'default' => null,
                    ),
                    'per_status' => array(
                        'type' => 'VARCHAR',
                        'constraint' => 50,
                        'required' => false,
                        'DEFAULT' => 'ATIVO',
                    ),
                    "`per_dataCadastro` TIMESTAMP DEFAULT CURRENT_TIMESTAMP",
        ));

        $this->dbforge->add_key('per_id', TRUE);
        $this->dbforge->create_table('perfis');

        $this->db->insert_batch('perfis', array(array('per_nome' => 'administrador'), array('per_nome' => ' Sem Perfil')));
    }

    public function down() {
        $this->dbforge->drop_table('usuarios');
    }

}
