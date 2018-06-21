<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_Users extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field(array(
            'user_id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'user_name' => array(
                'type' => 'VARCHAR',
                'null' => FALSE,
                'constraint' => '100',
            ),
            'password' => array(
                'type' => 'VARCHAR',
                'null' => FALSE,
                'constraint' => '100',
            ),
            'user_type' => array(
                'type' => 'VARCHAR',
                'null' => TRUE,
                'constraint' => '100',
            ),
            'status' => array(
                'type' => 'VARCHAR',
                'null' => TRUE,
                'constraint' => '100',
            ),
            'created_at' => array(
                'type' => 'TIMESTAMP',
                'null' => FALSE,
            ),
            // 'updated_at' => array(
            //     'type' => 'TIMESTAMP',
            //     'null' => FALSE,
            // ),
        ));
        $this->dbforge->add_key('user_id', TRUE);
        $this->dbforge->create_table('users');
    }
    public function down()
    {
       $this->dbforge->drop_table('users');
    }
}