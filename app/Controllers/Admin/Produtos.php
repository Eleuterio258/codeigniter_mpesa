<?php 
namespace App\Controllers\Admin;
use App\Models\ProdutoModel;
use CodeIgniter\Controller;

class Produtos  extends Controller
{


    public function __construct()
    {
        helper(['html', 'form']);

        $this->db = \Config\Database::connect();
    }    

    
    public function index(){
        $sql = "SELECT * FROM products";
         $dados = [
            'styles' => ["vendor/datatables/dataTables.bootstrap4.min.css"],
            'scripts' => [
                "vendor/datatables/jquery.dataTables.min.js",
                "vendor/datatables/dataTables.bootstrap4.min.js",
                "vendor/datatables/app.js"
            ],
            'product' => $this->db->query($sql)->getResultArray(),
            'titolo' => "Lista Produtos"
        ];
       
        echo view('layout/header', $dados);
        echo view('produtos/index', $dados);
        echo view('layout/footer');
    }

    public function edit($id = null)
    {
        $sql = "SELECT  *  from products where id=$id";
        $product = $this->db->query($sql)->getResultArray();

        if (count($product) == 0) {
            $dados = ["error" => "produto nao existe"];
        } else {
            $dados = ['produtos' => $product];
        }
  
        echo view('layout/header', $dados);
        echo view('Produtos/edit', $dados);
        echo view('layout/footer');
    }
    
}