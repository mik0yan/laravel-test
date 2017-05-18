<?php

use Flynsarmy\CsvSeeder\CsvSeeder;

class OrderApprovesTableSeeder extends CsvSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function __construct()
    {
      $this->table = 'order_approves';
      $this->csv_delimiter = ',';
      $this->filename = base_path().'/database/seeds/csvs/orderapprove.csv';

    }

    public function run()
    {
      DB::disableQueryLog();

      DB::table($this->table)->truncate();

      parent::run();
    }


}
