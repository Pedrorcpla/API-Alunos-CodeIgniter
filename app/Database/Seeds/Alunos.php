<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Alunos extends Seeder
{
    public function run()
    {
        $names = ['Pedro Augusto do Nascimento',
                  'Kayo Campos Silva',
                  'Hiago Costa Santos',
                  'Vitor Barbosa Ramires Rozendo'];
        $email = ['pedro.nascimento79@etec.sp.gov.br',
                  'kayo.silva22@etec.sp.gov.br',
                  'hiago.santos37@etec.sp.gov.br',
                  'vitor.rozendo@etec.sp.gov.br'];
        $password = ['12345',
                     '67890',
                     '13579',
                     '24680'];
        $rm = ['03456',
               '03578',
               '03134',
               '03342'];
        
        for($x = 0; $x < 4; $x++){
            $data = [
                'name'      => $names[$x],
                'email'     => $email[$x],
                'password'  => MD5($password[$x]),
                'rm'        => $rm[$x],
            ];
    
            // Using Query Builder
            $this->db->table('tb_aluno')->insert($data);
        }
    }
}
