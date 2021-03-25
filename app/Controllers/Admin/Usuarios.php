<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
class Usuarios extends BaseController
{


    public function __construct()
    {
        (['html', 'form']);

        $this->db = \Config\Database::connect();
    }

    public function index()
    {



        $sql = "SELECT  *  FROM users";
        $dados = [

            'style' => ["vendor/datatables/dataTables.bootstrap4.min.css"],
            'script' => [
                "vendor/datatables/jquery.dataTables.min.js",
                "vendor/datatables/dataTables.bootstrap4.min.js",
                "vendor/datatables/app.js"
            ],
            'usuarios' => $this->db->query($sql)->getResultArray(),
            'titolo' => "Lista de usuarios"
        ];

        echo view('layout/header', $dados);
        echo view('usuarios/index', $dados);
        echo view('layout/footer');
    }


    public function edit($id = null)
    {
        $sql = "SELECT * FROM users where id=$id";
        $usuarios = $this->db->query($sql)->getResultArray();

        if (count($usuarios) == 0) {
            $dados = ["error" => "usuarios nao existe"];
        } else {
            $dados = [
                'usuarios' => $usuarios,
                'styles' => ["vendor/datatables/dataTables.bootstrap4.min.css"],
                'scripts' => [
                    "vendor/datatables/jquery.dataTables.min.js",
                    "vendor/datatables/dataTables.bootstrap4.min.js",
                    "vendor/datatables/app.js"
                ],

                'titolo' => "Editar usuarios"
            ];
        }


        echo view('layout/header', $dados);
        echo view('usuarios/edit', $dados);
        echo view('layout/footer');
    }


    
    public function novo()
    {
        $dados = [

            'styles' => ["vendor/datatables/dataTables.bootstrap4.min.css"],
            'scripts' => [
                "vendor/datatables/jquery.dataTables.min.js",
                "vendor/datatables/dataTables.bootstrap4.min.js",
                "vendor/datatables/app.js"
            ],
           
            'titolo' => "Novo usuarios"
        ];
        echo view('layout/header',$dados);
        echo view('usuarios/novo',$dados);
        echo view('layout/footer');
    }
}
