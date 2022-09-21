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

    public function novoAluno(){
        $this->alunosModel->save([
            'name'          => $this->request->getPost('name'),
            'email'         => $this->request->getPost('email'),
            'password'      => $this->request->getPost('password'),
            'rm'            => $this->request->getPost('rm'),
            'photo'         => $this->require->getPost('photo')
        ]);
    }

    public function deletarAluno($id){
        $this->alunosModel->delete($id);
    }

    public function atualizarAluno($id){
        $data = $this->request->getJSON();
        $this->alunosModel->update($id, $data);
    }
    
}