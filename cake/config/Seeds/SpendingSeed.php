<?php
use Migrations\AbstractSeed;

/**
 * Spending seed.
 */
class SpendingSeed extends AbstractSeed
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
                'price' => 1000,
                'description' => 'ラーメン食べた',
                'created' => $datetime,
                'modified' => $datetime,
              ],

              [
                //同じ型のはずなのにdatetimeが反映されない
                'date' => '2019-06-11',
                'price' => 2000,
                'description' => '洋服買った',
                'created' => $datetime,
                'modified' => $datetime,
              ],
              [
                //同じ型のはずなのにdatetimeが反映されない
                'date' => '2019-06-10',
                'price' => 1250,
                'description' => '猫カフェ行った',
                'created' => $datetime,
                'modified' => $datetime,
              ],
              [
                //同じ型のはずなのにdatetimeが反映されない
                'date' => '2019-06-11',
                'price' => 750,
                'description' => 'ラーメン食べた',
                'created' => $datetime,
                'modified' => $datetime,
              ],
              [
                //同じ型のはずなのにdatetimeが反映されない
                'date' => '2019-06-11',
                'price' => 100,
                'description' => 'アイスを買った',
                'created' => $datetime,
                'modified' => $datetime,
              ],

        ];

        $table = $this->table('spending');
        $table->insert($data)->save();
    }
}
