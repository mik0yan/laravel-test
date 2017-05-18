<?php

use Flynsarmy\CsvSeeder\CsvSeeder;

class OrdersTableSeeder extends CsvSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function __construct()
    {
      $this->table = 'orders';
      $this->csv_delimiter = ',';
      $this->filename = base_path().'/database/seeds/csvs/order.csv';

    }

    public function run()
    {
      DB::disableQueryLog();

      DB::table($this->table)->truncate();

      parent::run();
    }


}
