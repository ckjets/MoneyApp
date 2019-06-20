<?php
use Migrations\AbstractSeed;

/**
 * Reasons seed.
 */
class ReasonsSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $datetime = date('Y-m-d H:i:s');

        $data = [
            [
                'name' => '給料',
                'created' => $datetime,
                'modified' => $datetime,
              ],
            [
                'name' => 'その他',
                'created' => $datetime,
                'modified' => $datetime,
              ],
        ];

        $table = $this->table('reasons');
        $table->insert($data)->save();
    }
}
