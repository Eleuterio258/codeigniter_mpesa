<?php

namespace App\Controllers;

class Usuarios extends BaseController
{


    public function __construct()
    {
        (['html', 'form', 'estado']);

        $this->db = \Config\Database::connect();
    }

    public function index()
    {



        $sql = "SELECT  *  FROM users u INNER JOIN roles r on u.role_id= r.idrole";
        $dados = [

            'styles' => ["vendor/datatables/dataTables.bootstrap4.min.css"],
            'scripts' => [
                "vendor/datatables/jquery.dataTables.min.js",
                "vendor/datatables/dataTables.bootstrap4.min.js",
                "vendor/datatables/app.js"
            ],
            'usuarios' => $this->db->query($sql)->getResultArray(),
            'titolo' => "Lista de Usuários"
        ];

        echo view('layout/header', $dados);
        echo view('usuarios/index', $dados);
        echo view('layout/footer');
    }


    public function edit($id = null)
    {
        $sql = "SELECT * FROM users u INNER JOIN roles r on u.role_id= r.idrole where id=$id";
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

                'titolo' => "Editar Usuário"
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
           
            'titolo' => "Novo Usuário"
        ];
        echo view('layout/header',$dados);
        echo view('usuarios/novo',$dados);
        echo view('layout/footer');
    }
}
