<?php

defined('BASEPATH') OR exit('No	direct	script	access	allowed');

class Migration_c_permissoes extends CI_Migration {

    public function up() {
        /* Metodos */
        $this->dbforge->add_field(
                array(
                    'met_id' => array(
                        'type' => 'INT',
                        'constraint' => 9,
                        'unsigned' => TRUE,
                        'auto_increment' => TRUE
                    ),
                    'met_classe' => array(
                        'type' => 'varchar',
                        'constraint' => 100,
                        'required' => false,
                        'default' => null,
                    ),
                    'met_metodo' => array(
                        'type' => 'varchar',
                        'constraint' => 100,
                        'required' => false,
                        'default' => null,
                    ),
                    'met_apelido' => array(
                        'type' => 'varchar',
                        'constraint' => 100,
                        'required' => false,
                        'default' => null,
                    ),
                    'met_privado' => array(
                        'type' => 'INT',
                        'constraint' => 9,
                        'required' => false,
                        'default' => null,
                        'comment' => '0 livre, 1 privado',
                    ),
                    "`met_dataCadastro` TIMESTAMP DEFAULT CURRENT_TIMESTAMP",
        ));

        $this->dbforge->add_key('met_id', TRUE);
        $this->dbforge->create_table('metodos');

        $dadosMetodos = array(
            array(
                'met_classe' => 'painel',
                'met_metodo' => 'index',
                'met_privado' => 0,
            ),
            array(
                'met_classe' => 'usuarios',
                'met_metodo' => 'index',
                'met_privado' => 1,
            ),
            array(
                'met_classe' => 'usuarios',
                'met_metodo' => 'criar',
                'met_privado' => 1,
            ),
            array(
                'met_classe' => 'usuarios',
                'met_metodo' => 'editar',
                'met_privado' => 1,
            ),
            array(
                'met_classe' => 'usuarios',
                'met_metodo' => 'delete',
                'met_privado' => 1,
            ),
            array(
                'met_classe' => 'perfis',
                'met_metodo' => 'index',
                'met_privado' => 1,
            ),
            array(
                'met_classe' => 'perfis',
                'met_metodo' => 'criar',
                'met_privado' => 1,
            ),
            array(
                'met_classe' => 'perfis',
                'met_metodo' => 'editar',
                'met_privado' => 1,
            ),
            array(
                'met_classe' => 'perfis',
                'met_metodo' => 'delete',
                'met_privado' => 1,
            ),
            array(
                'met_classe' => 'perfis',
                'met_metodo' => 'permissoes',
                'met_privado' => 1,
            ),
            array(
                'met_classe' => 'metodos',
                'met_metodo' => 'index',
                'met_privado' => 1,
            ),
            array(
                'met_classe' => 'metodos',
                'met_metodo' => 'criar',
                'met_privado' => 1,
            ),
            array(
                'met_classe' => 'metodos',
                'met_metodo' => 'editar',
                'met_privado' => 1,
            ),
            array(
                'met_classe' => 'metodos',
                'met_metodo' => 'delete',
                'met_privado' => 1,
            ),
            array(
                'met_classe' => 'painel',
                'met_metodo' => 'sobre',
                'met_privado' => 0,
            ),
            array(
                'met_classe' => 'painel',
                'met_metodo' => 'acesso',
                'met_privado' => 0,
            ),
            array(
                'met_classe' => 'painel',
                'met_metodo' => 'sair',
                'met_privado' => 0,
            ),
            array(
                'met_classe' => 'parametros',
                'met_metodo' => 'index',
                'met_privado' => 1,
            ),
        );
        $this->db->insert_batch('metodos', $dadosMetodos);


        /*             */
        $this->dbforge->add_field(
                array(
                    'pp_id' => array(
                        'type' => 'INT',
                        'constraint' => 9,
                        'unsigned' => TRUE,
                        'auto_increment' => TRUE
                    ),
                    'pp_idPerfil' => array(
                        'type' => 'INT',
                        'constraint' => 9,
                        'unsigned' => TRUE,
                        'required' => false,
                        'default' => null,
                    ),
                    'pp_idMetodo' => array(
                        'type' => 'INT',
                        'constraint' => 9,
                        'unsigned' => TRUE,
                        'required' => false,
                        'default' => null,
                    ),
                    "`pp_dataCadastro` TIMESTAMP DEFAULT CURRENT_TIMESTAMP",
                    'CONSTRAINT fk_pp_idMetodo FOREIGN KEY (`pp_idMetodo`) REFERENCES `metodos`(`met_id`)',
                    'CONSTRAINT fk_pp_idPerfil FOREIGN KEY (`pp_idPerfil`) REFERENCES `perfis`(`per_id`)',
        ));

        $this->dbforge->add_key('pp_id', TRUE);
        $this->dbforge->create_table('perfil_permissoes');

        $dadosPerfil = array(
            array(
                'pp_idPerfil' => 1,
                'pp_idMetodo' => 1,
            ),
            array(
                'pp_idPerfil' => 1,
                'pp_idMetodo' => 2,
            ),
            array(
                'pp_idPerfil' => 1,
                'pp_idMetodo' => 3,
            ),
            array(
                'pp_idPerfil' => 1,
                'pp_idMetodo' => 4,
            ),
            array(
                'pp_idPerfil' => 1,
                'pp_idMetodo' => 5,
            ),
            array(
                'pp_idPerfil' => 1,
                'pp_idMetodo' => 6,
            ),
            array(
                'pp_idPerfil' => 1,
                'pp_idMetodo' => 7,
            ),
            array(
                'pp_idPerfil' => 1,
                'pp_idMetodo' => 8,
            ),
            array(
                'pp_idPerfil' => 1,
                'pp_idMetodo' => 9,
            ),
            array(
                'pp_idPerfil' => 1,
                'pp_idMetodo' => 10,
            ),
            array(
                'pp_idPerfil' => 1,
                'pp_idMetodo' => 11,
            ),
            array(
                'pp_idPerfil' => 1,
                'pp_idMetodo' => 12,
            ),
            array(
                'pp_idPerfil' => 1,
                'pp_idMetodo' => 13,
            ),
            array(
                'pp_idPerfil' => 1,
                'pp_idMetodo' => 14,
            ),
            array(
                'pp_idPerfil' => 1,
                'pp_idMetodo' => 18,
            ),
        );
        $this->db->insert_batch('perfil_permissoes', $dadosPerfil);


        /*             */
        $this->dbforge->add_field(
                array(
                    'up_id' => array(
                        'type' => 'INT',
                        'constraint' => 9,
                        'unsigned' => TRUE,
                        'auto_increment' => TRUE
                    ),
                    'up_idUsuario' => array(
                        'type' => 'INT',
                        'constraint' => 9,
                        'unsigned' => TRUE,
                    ),
                    'up_idPerfil' => array(
                        'type' => 'INT',
                        'constraint' => 9,
                        'unsigned' => TRUE,
                    ),
                    "`up_dataCadastro` TIMESTAMP DEFAULT CURRENT_TIMESTAMP",
                    'CONSTRAINT fk_up_idUsuario FOREIGN KEY (`up_idusuario`) REFERENCES `usuarios`(`usu_id`)',
                    'CONSTRAINT fk_up_idPerfil FOREIGN KEY (`up_idPerfil`) REFERENCES `perfis`(`per_id`)',
        ));

        $this->dbforge->add_key('up_id', TRUE);
        $this->dbforge->create_table('usuario_perfil');

        $this->db->insert_batch('usuario_perfil', array(array('up_idUsuario' => 1, 'up_idPerfil' => 1)));
    }

    public function down() {
        $this->dbforge->drop_table('usuarios');
    }

}
