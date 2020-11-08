<?php namespace App\Models;
use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = "product";
    protected $allowedFields = ['product_name', 'product_description'];

    public function getProduct($id = false)
    {
        if (!$id){
            return $this->table($this->table)
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table($this->table)
                        ->where('id', $id)
                        ->get()
                        ->getRowArray();
        }   
    } 

    public function insertProduct($data)
    {
        return $this->table($this->table)->insert($data);
    } 

    public function updateProduct($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id' => $id]);
    } 

    public function deleteProduct($id)
    {
        return $this->db->table($this->table)->delete(['id' => $id]);
    }

}
