<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductSeeder extends Seeder
{
	public function run()
	{
		$data = [
			'product_name' => 'Bubble Wrap',
			'product_description'    => 'this is bubble wrap description '
		];

		$this->db->table('product')->insert($data);
	}
}
