<?php namespace App\Controllers;

use App\Models\ProductModel;

class ProductController extends BaseController
{
    public function __construct() 
    {
        $this->product = new ProductModel();
    }

	public function index()
    {
        $data['product'] = $this->product->getProduct();
        return view('product/index', $data);
    } 

    public function create()
    {
        return view('product/create');
    } 

    public function store()
    {
        $name = $this->request->getPost('product_name');
        $desc = $this->request->getPost('product_description');
    
        $data = [
            'product_name' => $name,
            'product_description' => $desc
        ];
    
        $save = $this->product->insertProduct($data);
    
        if ($save) {
            session()->setFlashdata('success', 'Created product successfully');
            return redirect()->to(base_url('product')); 
        }
    }

    public function edit($id)
    {
        $data['product'] = $this->product->getProduct($id);
        return view('product/edit', $data);
    } 

    public function update($id)
    {
        $name = $this->request->getPost('product_name');
        $desc = $this->request->getPost('product_description');
    
        $data = [
            'product_name' => $name,
            'product_description' => $desc
        ];
     
        $update = $this->product->updateProduct($data, $id);
        
        if ($update) {
            session()->setFlashdata('info', 'Updated product successfully');
            return redirect()->to(base_url('product')); 
        }
    }

    public function delete($id)
    {
        $delete = $this->product->deleteProduct($id);
    
        if ($delete) {
            session()->setFlashdata('warning', 'Deleted product successfully');
            return redirect()->to(base_url('product'));
        }
    } 
}