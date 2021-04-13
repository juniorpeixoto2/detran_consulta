<?php

defined('BASEPATH') or exit('No	direct	script	access	allowed');

class Migration_c_clientes extends CI_Migration {

    public function up() {
        /* Metodos */
        $this->dbforge->add_field(
            array(
                'cli_id' => array(
                    'type' => 'INT',
                    'constraint' => 9,
                    'unsigned' => TRUE,
                    'auto_increment' => TRUE
                ),
                'cli_nome' => array(
                    'type' => 'varchar',
                    'constraint' => 900,
                    'required' => false,
                    'default' => null,
                ),
                'cli_email' => array(
                    'type' => 'varchar',
                    'constraint' => 900,
                    'required' => true,
                ),
                'cli_senha' => array(
                    'type' => 'longtext',
                    'required' => true,
                ),
                'cli_sexo' => array(
                    'type' => 'varchar',
                    'constraint' => 50,
                    'required' => false,
                    'default' => null,
                ),
                'cli_telefone' => array(
                    'type' => 'varchar',
                    'constraint' => 50,
                    'required' => false,
                    'default' => null,
                ),
                'cli_cpf' => array(
                    'type' => 'varchar',
                    'constraint' => 50,
                    'required' => false,
                    'default' => null,
                ),
                'cli_logradouro' => array(
                    'type' => 'varchar',
                    'constraint' => 900,
                    'required' => false,
                    'default' => null,
                ),
                'cli_numero' => array(
                    'type' => 'varchar',
                    'constraint' => 15,
                    'required' => false,
                    'default' => null,
                ),
                'cli_complemento' => array(
                    'type' => 'varchar',
                    'constraint' => 500,
                    'required' => false,
                    'default' => null,
                ),
                'cli_bairro' => array(
                    'type' => 'varchar',
                    'constraint' => 100,
                    'required' => false,
                    'default' => null,
                ),
                'cli_cidade' => array(
                    'type' => 'varchar',
                    'constraint' => 200,
                    'required' => false,
                    'default' => null,
                ),
                'cli_cep' => array(
                    'type' => 'varchar',
                    'constraint' => 50,
                    'required' => false,
                    'default' => null,
                ),
                'cli_uf' => array(
                    'type' => 'varchar',
                    'constraint' => 20,
                    'required' => false,
                    'default' => null,
                ),
                'cli_status' => array(
                    'type' => 'varchar',
                    'constraint' => 100,
                    'required' => true,
                    'default' => 'ativo',
                ),
                'cli_dadosBanco' => array(
                    'type' => 'longtext',
                    'required' => false,
                    'default' => null,
                ),
                'cli_erroLogin' => array(
                    'type' => 'varchar',
                    'constraint' => 10,
                    'required' => false,
                    'default' => null,
                ),
                'cli_dataBloqueio' => array(
                    'type' => 'TIMESTAMP',
                    'required' => false,
                    'default' => null,
                ),
                "`cli_dataCadastro` TIMESTAMP DEFAULT CURRENT_TIMESTAMP",
            )
        );

        $this->dbforge->add_key('cli_id', TRUE);
        $this->dbforge->create_table('clientes');

        $dadosMetodos = array(
            array(
                'met_classe' => 'clientes',
                'met_metodo' => 'index',
                'met_privado' => 1,
            ),
            array(
                'met_classe' => 'clientes',
                'met_metodo' => 'criar',
                'met_privado' => 1,
            ),
            array(
                'met_classe' => 'clientes',
                'met_metodo' => 'editar',
                'met_privado' => 1,
            ),
            array(
                'met_classe' => 'clientes',
                'met_metodo' => 'delete',
                'met_privado' => 1,
            ),
        );
        $this->db->insert_batch('metodos', $dadosMetodos);
    }

    public function down() {
        $this->dbforge->drop_table('clientes');
    }
}
