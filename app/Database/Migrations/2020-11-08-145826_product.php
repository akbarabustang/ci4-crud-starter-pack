<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Product extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
					'type'           => 'INT',
					'constraint'     => 11,
					'unsigned'       => TRUE,
					'auto_increment' => TRUE
			],
			'product_name'       => [
					'type'           => 'VARCHAR',
					'constraint'     => '100',
			],
			'product_description' => [
					'type'           => 'TEXT',
					'null'           => TRUE,
			],
		]);
		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('product');
	}

	//--------------------------------------------------------------------

	public function down()
	{

	}
}
