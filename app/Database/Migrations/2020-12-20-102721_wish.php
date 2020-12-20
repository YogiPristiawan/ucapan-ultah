<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Wish extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
				'auto_increment' => true
			],
			'wishes' => [
				'type' => 'VARCHAR',
				'constraint' => '500'
			],
			'created_at' => [
				'type' => 'DATETIME',
				'null' => true
			]
		]);

		$this->forge->addPrimaryKey('id');
		$this->forge->createTable('wish');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('wish');
	}
}
