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
            return $this->asArray()->where(['id'=>$id])->first();
        }

        public function getParametro($parametro){
            return $this->db->first($parametro);
        }
    } 
?>