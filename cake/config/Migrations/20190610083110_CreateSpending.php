<?php
use Migrations\AbstractMigration;

class CreateSpending extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('spending');

        $table->addColumn('date', 'date', [
            'default' => null,
            'null' => false,
        ]);

        $table->addColumn('price', 'integer', [
            'default' => null,
            'null' => false,
        ]);

        $table->addColumn('description', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();
    }
}
