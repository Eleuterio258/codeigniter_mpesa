<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Users extends ResourceController
{
    protected $format       = 'json';
    protected $modelName    = 'App\Models\User_model';

    public function index()
    {
        $get = $this->model->findAll();
        $response = [
            'message' => "User loaded succesfully",
            'data' => $get,
        ];
        return $this->respond($response, 200);
    }

    public function show($id = NULL)
    {
        $get = $this->model->getUser($id);
        if ($get) {
            $code = 200;
            $response = [
                'message' => "User with id $id successfully retrieved",
                'data' => $get,
            ];
        } else {
            $code = 401;
            $msg = ['message' => 'Not Found'];
            $response = [
                'error' => $msg,
            ];
        }
        return $this->respond($response, $code);
    }

    public function create()
    {
        $validation =  \Config\Services::validation();

        $input = $this->request->getJSON(true);

        if ($validation->run($input, 'user') == FALSE) {
            $response = [
                'error' => $validation->getErrors(),
            ];
            return $this->respond($response, 500);
        } else {
            $simpan = $this->model->insertUser($input);
            if ($simpan) {
                $dataUser = $this->model->getUser($simpan);
                $response = [
                    'message' => 'User created successfully',
                    'data' => $dataUser,
                ];
                return $this->respond($response, 200);
            }
        }
    }

    public function update($id = NULL)
    {
        $input = $this->request->getJSON(true);

        $simpan = $this->model->updateUser($input, $id);
        if ($simpan) {
            $dataUser = $this->model->getUser($id);
            $response = [
                'message' => "User with id $id has been successfully edited",
                'data' => $dataUser,
            ];
            return $this->respond($response, 200);
        }
    }

    public function delete($id = NULL)
    {
        $hapus = $this->model->deleteUser($id);
        if ($hapus) {
            $code = 200;
            $response = [
                'message' => "User with id $id has been successfully removed",
            ];
        } else {
            $code = 401;
            $msg = ['message' => 'Not Found'];
            $response = [
                'error' => $msg,
            ];
        }
        return $this->respond($response, $code);
    }
}
