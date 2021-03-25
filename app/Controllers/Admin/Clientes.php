<?php

namespace App\Controllers\Admin;

use App\Models\CustomersModel;
use App\Controllers\BaseController;

class Clientes extends BaseController
{

    public function __construct()
    {
        helper(['html', 'form']);

        $this->db = \Config\Database::connect();
    }

    public function index()
    {


        $model = new CustomersModel();
        $data['employees_detail'] = $model->orderBy('id', 'DESC')->findAll();
        $data['titolo'] = "Lista de clientes";
        echo view('layout/header', $data);
        echo view('layout/sidebar');
        echo view('layout/topbar');
        echo view('layout/header', $data);
        echo view('clientes/index', $data);
        echo view('layout/footer');
    }


    public function create()
    {
        $data['titolo'] = "Novo de clientes";
        echo view('layout/header', $data);
        echo view('layout/sidebar');
        echo view('layout/topbar');
        echo view('clientes/add');
        echo view('layout/footer');
    }



    public function store()
    {

        helper(['form', 'url']);

        $model = new CustomersModel();

        $data = [
            'fullname' => $this->request->getVar('txtFullname'),
            'password'  => $this->request->getVar('txtPassword'),
            'email'  => $this->request->getVar('txtEmail'),
            'phone'  => $this->request->getVar('txtPhone'),
            'adress'  => $this->request->getVar('txtAdress')
        ];
        $save = $model->insert($data);
        return redirect()->to(base_url('clientes'));
    }

    public function edit($id = null)
    {

        $model = new CustomersModel();
        $data['employee'] = $model->where('id', $id)->first();
        $data['titolo'] = "Editar de clientes";
        echo view('layout/header', $data);
        echo view('layout/sidebar');
        echo view('layout/topbar');
        echo view('clientes/edit', $data);
        echo view('layout/footer');
    }

    public function update()
    {

        helper(['form', 'url']);

        $model = new CustomersModel();

        $id = $this->request->getVar('id');

        $data = [
            'fullname' => $this->request->getVar('txtFullname'),
            'password'  => $this->request->getVar('txtPassword'),
            'email'  => $this->request->getVar('txtEmail'),
            'phone'  => $this->request->getVar('txtPhone'),
            'adress'  => $this->request->getVar('txtAdress'),
            'status'  => $this->request->getVar('txtStatus')
        ];

        $save = $model->update($id, $data);
        return redirect()->to(base_url('clientes'));
    }

    public function delete($id = null)
    {
        $model = new CustomersModel();
        $data['user'] = $model->where('id', $id)->delete();
        return redirect()->to(base_url('clientes'));
    }
}
