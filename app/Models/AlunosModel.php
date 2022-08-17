<?php 

    namespace App\Models;

    use CodeIgniter\Model;

    class AlunosModel extends Model{
        protected $table = 'tb_aluno';
        protected $primaryKey = 'id';
        protected $useAutoIncrement = true;

        protected $allowedFields = ['name', 'email', 'password', 'rm'];
        protected $validationRules = [
            'name'          => 'required|min_length[3]',
            'email'         => 'required|min_length[5]',
            'password'      => 'required|min_length[3]',
            'rm'            => 'required'
        ];

        public function getAlunos(){
            return $this->findAll();
        }

        public function getAluno($id){
            return $this->asArray()->find($id);
        }

        public function getParametro($parametro){
            $data = [];

            for($id = 1; $id <= $parametro; $id++){
                $data[$id-1] = $this->asArray()->find($id);
            }
            
            return $data;
        }
    } 
?>