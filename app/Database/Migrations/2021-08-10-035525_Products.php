<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Products extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'	=> [
				'type'	=> 'INT',
				'auto_increment' => true
			],
			'title'	=> [
				'type'	=> 'VARCHAR',
				'constraint' => 225
			],
			'price'	=> [
				'type'	=> 'INT'
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('products');
	}

	public function down()
	{
		$this->forge->dropTable('products');
	}
}
