<?php
use Migrations\AbstractMigration;

class CreateIncomes extends AbstractMigration
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

        $table = $this->table('incomes');

        $table->addColumn('date', 'date', [
            'default' => null,
            'null' => false,
        ]);

        $table->addColumn('price', 'integer', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('reason_id', 'integer', [
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
