<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class Cliente extends AbstractMigration
{
    public function change()
    {
        // create the table
        $table = $this->table('cliente');
        $table->addColumn('nome', 'string', ['null' => true, 'limit' => 100])
            ->addColumn('sobre_nome', 'string', ['null' => true, 'limit' => 120])
            ->addColumn('cpf', 'string', ['null' => true, 'limit' => 20])
            ->addColumn('rg', 'string', ['null' => true, 'limit' => 40])
            ->addColumn('data_nascimento', 'date')
            ->addColumn('data_cadastro', 'datetime')
            ->addColumn('data_atualizacao', 'datetime')
            ->create();
    }
}
