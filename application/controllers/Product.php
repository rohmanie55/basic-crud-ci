<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

    public function __construct()
	{
		parent::__construct();

        $this->load->model('product_model', 'product');
        $this->load->model('category_model', 'category');
    }

    public function index(){
        $data['title']    = 'Data Product';
        $data['products'] = $this->product->get();

        $this->load->view('template/header', $data);
        $this->load->view('product/index', $data);
        $this->load->view('template/footer');
    }

    public function add(){
        if($this->input->method()=='post'){
            $this->product->insert([
                'name' => $this->input->post('name'),
                'category_id'=> $this->input->post('category_id'),
            ]);

            return redirect(base_url('product'));
        }

        $data['title']    = 'Tambah Data Product';
        $data['categoris']= $this->category->get();

        $this->load->view('template/header', $data);
        $this->load->view('product/add', $data);
        $this->load->view('template/footer');
    }

    public function edit($id){
        if($this->input->method()=='post'){
            $this->product->update($id, [
                'name' => $this->input->post('name'),
                'category_id'=> $this->input->post('category_id'),
            ]);

            return redirect(base_url('product'));
        }

        $data['title']    = 'Edit Data Product';
        $data['item']     = $this->product->find($id);

        $data['categoris']= $this->category->get();

        $this->load->view('template/header', $data);
        $this->load->view('product/edit', $data);
        $this->load->view('template/footer');
    }

    public function delete($id){
        $this->product->delete($id);

        return redirect(base_url('product'));
    }
}
