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
        $photo = ['https://ovicio.com.br/wp-content/uploads/2022/03/20220319-mask-animated-ovicio.jpg',
                  'http://s2.glbimg.com/2QIZZATVL7funvAMFvPlREc6lbup7ft9TAhYWWfEZ3hIoz-HdGixxa_8qOZvMp3w/s.glbimg.com/og/rg/f/original/2012/10/18/animais3.jpg',
                  'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcScEfonqvDci68B_0GOx_hbsu_1k4geqvCQ7A&usqp=CAU',
                  'https://i.pinimg.com/564x/ef/aa/47/efaa476f788185842b639e8fd2926e4e.jpg'];
        
        for($x = 0; $x < 4; $x++){
            $data = [
                'name'      => $names[$x],
                'email'     => $email[$x],
                'password'  => MD5($password[$x]),
                'rm'        => $rm[$x],
                'photo'     => $photo[$x],
            ];
    
            // Using Query Builder
            $this->db->table('tb_aluno')->insert($data);
        }
    }
}
