<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
class categorias extends BaseController
{

    public function __construct()
    {
        helper(['html', 'form']);

        $this->db = \Config\Database::connect();
    }

    public function index()
    {



        $sql = "SELECT  *  from cliente";
        $dados = [
            'styles' => ["vendor/datatables/dataTables.bootstrap4.min.css"],
            'scripts' => [
                "vendor/datatables/jquery.dataTables.min.js",
                "vendor/datatables/dataTables.bootstrap4.min.js",
                "vendor/datatables/app.js"
            ],
            'usuarios' => $this->db->query($sql)->getResultArray(),
            'titolo' => "Lista Usuário"
        ];

        echo view('layout/header', $dados);
        echo view('usuario/index', $dados);
        echo view('layout/footer');
    }


    public function edit($clienteID = null)
    {
        $sql = "SELECT  *  from cliente where clienteID=$clienteID";
        $usuarios = $this->db->query($sql)->getResultArray();

        if (count($usuarios) == 0) {
            $dados = ["error" => "usuarios nao existe"];
        } else {
            $dados = ['usuarios' => $usuarios];
        }
        echo '<pre>';
        var_dump($dados);
        exit;

        echo view('layout/header', $dados);
        echo view('usuario/edit', $dados);
        echo view('layout/footer');
    }
}
