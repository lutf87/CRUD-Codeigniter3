<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("produk_model");
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data["produk"] = $this->produk_model->getAll();
        $this->load->view("admin/produk/list", $data);
    }
    public function add()
    {
        $produk = $this->produk_model;
        $validation = $this->form_validation;
        $validation->set_rules($produk->rules());

        if ($validation->run()) {
            $produk->save();
            $this->session->set_flashdata('success', 'Berhasil Disimpan');
        }
        $this->load->view("admin/produk/new");
    }
    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/produk'); {
            $produk = $this->produk_model;
            $validation = $this->form_validation;
            $validation->set_rules($produk->rules());

            if ($validation->run()) {
                $produk->update();
                $this->session->set_flashdata('success', 'Data berhasil diedit');
            }
        }
        $data["produk"] = $produk->getById($id);
        if (!$data["produk"]) show_404();
        $this->load->view("admin/produk/edit", $data);
    }
    public function delete($id = null)
    {
        if (!isset($id)) show_404();
        if ($this->produk_model->delete($id)) {
            redirect(site_url('admin/produk'));
        }
    }
}
