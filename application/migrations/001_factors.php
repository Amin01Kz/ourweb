<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_factors extends CI_Migration {

        public function up()
        {
                $this->dbforge->addfeild([
                        'id' => [
                                'type'          => 'INT',
                                'constraint'    => '5',
                                'unsigned'      => TRUE,
                                'auto_increment'=> TRUE
                        ],
                        'code' => [
                                'type'          => 'VARCHAR',
                                'constraint'    => '255'
                        ],
                        'receipt_code' => [
                                'type'          => 'VARCHAR',
                                'constraint'    => '20',
                                'unique'        => TRUE
                        ],
                        'name' => [
                                'type'          => 'VARCHAR',
                                'constraint'    => '200',
                        ],
                        'description' => [
                                'type'          => 'TEXT',
                                'null'          => TRUE,
                        ],
                        'phone' => [
                                'type'          => 'VARCHAR',
                                'constraint'    => '20',
                        ],
                        'paid' => [
                                'type'          => 'BOOLEAN'
                        ],
                        'date' => [
                                'type'          => 'DATE'
                        ]
                ]);

                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('factors');

        }

        public function down()
        {
                $this->dbforge->drop_table('factors');
        }
}