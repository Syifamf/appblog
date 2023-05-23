<?php

declare(strict_types=1);

use Phoenix\Migration\AbstractMigration;

final class AddTablePost extends AbstractMigration
{
    protected function up(): void
    {
        $this->table('post')
        ->addColumn('id','integer', ['autoincrement' => true])
        ->addColumn('title', 'string')
        ->addColumn('article', 'text')
        ->addColumn('created_at', 'datetime')
        ->addColumn('updated_at', 'datetime', ['null' => true])
        ->create();
    }

    protected function down(): void
    {
        $this->table('post')
        ->drop();
    }
}
