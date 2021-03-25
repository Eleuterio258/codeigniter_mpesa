<?php

namespace App\Controllers\Api;
use Fluent\Models\DB;
use App\Controllers\BaseController;
use Paymentsds\MPesa\Client;
class Api extends BaseController

{
	public function __construct()
	{
		$this->db = \Config\Database::connect();
	}
	public function index()
	{
		return view('welcome_message');
	}

	public function hello()
	{
		echo 'Ola Mundo';
	}
	public function soma()
	{
		$request = \Config\Services::request();
		$num1 = $this->request->getPost('numero1');
		$num2 = $this->request->getPost('numero2');

		if ((is_numeric($num1)) && is_numeric($num2)) {
			$soma = intval($num1) + intval($num2);
			$resulto = ["error" => false, "resultado" => $soma];
			return $this->response->setStatusCode(200)->setJSON($resulto);
		} else {
			$resulto = ["error" => true, "resultado" => 0];
			return $this->response->setStatusCode(200)->setJSON($resulto);
		}
	}

	public function getAll()
	{
		$dados = $this->db->table('user')->select('*')->get()->getResultObject();
		return	$this->response->setStatusCode(200)->setJSON($dados);
	}
	public function pagamento()
	{
		$celular = $this->request->getPost('celular');
		$valor   = $this->request->getPost('dvalor');
		$reference = rand(1, 1000000);

		$client = new Client([
			'apiKey' => 'bwcsxd32p8azu0529d92xgzl4uhyo6rm',
			'publicKey' => 'MIICIjANBgkqhkiG9w0BAQEFAAOCAg8AMIICCgKCAgEAmptSWqV7cGUUJJhUBxsMLonux24u+FoTlrb+4Kgc6092JIszmI1QUoMohaDDXSVueXx6IXwYGsjjWY32HGXj1iQhkALXfObJ4DqXn5h6E8y5/xQYNAyd5bpN5Z8r892B6toGzZQVB7qtebH4apDjmvTi5FGZVjVYxalyyQkj4uQbbRQjgCkubSi45Xl4CGtLqZztsKssWz3mcKncgTnq3DHGYYEYiKq0xIj100LGbnvNz20Sgqmw/cH+Bua4GJsWYLEqf/h/yiMgiBbxFxsnwZl0im5vXDlwKPw+QnO2fscDhxZFAwV06bgG0oEoWm9FnjMsfvwm0rUNYFlZ+TOtCEhmhtFp+Tsx9jPCuOd5h2emGdSKD8A6jtwhNa7oQ8RtLEEqwAn44orENa1ibOkxMiiiFpmmJkwgZPOG/zMCjXIrrhDWTDUOZaPx/lEQoInJoE2i43VN/HTGCCw8dKQAwg0jsEXau5ixD0GUothqvuX3B9taoeoFAIvUPEq35YulprMM7ThdKodSHvhnwKG82dCsodRwY428kg2xM/UjiTENog4B6zzZfPhMxFlOSFX4MnrqkAS+8Jamhy1GgoHkEMrsT5+/ofjCx0HjKbT5NuA2V/lmzgJLl3jIERadLzuTYnKGWxVJcGLkWXlEPYLbiaKzbJb2sYxt+Kt5OxQqC1MCAwEAAQ==',
			'serviceProviderCode' => '171717'
		]);

		if (!empty($celular) && !empty($valor) && !empty($reference)) {
			$paymentData = [
				'from' => '258' . $celular,
				'reference' => $reference,
				'transaction' => 'T12344CC',
				'amount' => $valor
			];

			$result = $client->receive($paymentData);

			if ($result->success) {
				echo "Pagamento efectuado!";
			} else {
				echo "Falha ao processar pagamento";
			}
		} else {
			echo "Preencha todos os campos do formulário";
		}
	}
	public function cadastro()
	{
		$request = \Config\Services::request();

		$dados = $this->db->table('user');

		$nome = $this->request->getPost('nome');
		$apelido = $this->request->getPost('apelido');
		$idade = $this->request->getPost('idade');


		$registro = [
			'nome' =>	$nome,
			'apelido' =>	$apelido,
			'idade' =>	$idade
		];
		$dados->insert($registro);

		return $this->response->setStatusCode(200)->setJSON(["msg" => "Dados inserido com sucesso "]);
	}

	public function findId($id = null)
	{
		$db = db_connect();
		$dados = $this->db->table('user')->select('*')->where(['id' => $id])->get()->getResultObject();
		if ($id == null) {
			return $this->response
				->setStatusCode(400)
				->setJSON([
					"code" => "400",
					"result" => "Informe o Dados",
					"data" => 0
				]);
		}

		if (count($dados) == 0) {
			return $this->response
				->setStatusCode(400)
				->setJSON([
					"code" => "400",
					"result" => "Dados nao encantrado ",
					"data" => 0
				]);
		} else {
			return $this->response
				->setStatusCode(200)
				->setJSON([
					"code" => "200",
					"result" => $dados
				]);
		}
	}
}
