<?php namespace App\Models;

use CodeIgniter\Model;

class ModelUsuario extends Model

{

    public function get_data($email, $senha)
    {
        return    $this->db->table('user')
            ->where(array('email' => $email, 'senha' => $senha))
            ->get()->getRowArray();
    }
}
