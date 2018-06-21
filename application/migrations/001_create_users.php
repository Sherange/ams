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
            'user_name_title' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'user_type' => array(
                'type' => 'VARCHAR',
                'null' => TRUE,
                'constraint' => '100',
            ),
        ));
        $this->dbforge->add_key('user_id', TRUE);
        $this->dbforge->create_table('users');
    }
    public function down()
    {
        $this->dbforge->drop_table('users');
    }
}