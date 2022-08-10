<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Alunos extends ResourceController
{
    private $alunosModel;

    public function __construct(){
        $this->alunosModel = new \App\Models\AlunosModel();
    }

    public function listar()
    {
        $data = $this->alunosModel->getAlunos();
        return $this->response->setJson($data);
    }

    public function aluno($id = null)
    {
        $data = $this->alunosModel->getAluno($id);
        return $this->response->setJson($data);
    }

    public function taisAlunos($parametro = null)
    {
        $data = $this->alunosModel->getParametro($parametro);
        return $this->response->setJson($data);
    }
    
}