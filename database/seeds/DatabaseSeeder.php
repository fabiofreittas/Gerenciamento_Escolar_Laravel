<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into alunos (nome, nascimento, endereco, serie) values (?,?,?,?)', array('João Nunes', '2000-12-31', 'Avenida 34', '5ª'));
        DB::insert('insert into alunos (nome, nascimento, endereco, serie) values (?,?,?,?)', array('Pedro Antônio', '1998-10-25', 'Avenida 1505', '9ª'));
        DB::insert('insert into alunos (nome, nascimento, endereco, serie) values (?,?,?,?)', array('Henrique Vieira', '1999-02-04', 'Avenida 1° de maio', '9ª'));
    }
}
