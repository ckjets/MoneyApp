<?php
use Migrations\AbstractSeed;

/**
 * Incomes seed.
 */
class IncomesSeed extends AbstractSeed
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
                //同じ型のはずなのにdatetimeが反映されない
                'date' => '2019-06-10',
                'price' => 1000000,
                'reason_id' => 1,
                'created' => $datetime,
                'modified' => $datetime,
              ],
              [         
                'date' => '2019-06-10',
                'price' => 12000,
                'reason_id' => 2,
                'created' => $datetime,
                'modified' => $datetime,
              ],
              [
                'date' => '2019-06-10',
                'price' => 12345,
                'reason_id' => 2,
                'created' => $datetime,
                'modified' => $datetime,
              ],
              [
                'date' => '2019-06-10',
                'price' => 56789,
                'reason_id' => 2,
                'created' => $datetime,
                'modified' => $datetime,
              ],
        ];

        

        $table = $this->table('incomes');
        $table->insert($data)->save();
    }
}
