<?php

use Flynsarmy\CsvSeeder\CsvSeeder;

class OrderProductsTableSeeder extends CsvSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function __construct()
    {
      $this->table = 'order_product';
      $this->csv_delimiter = ',';
      $this->filename = base_path().'/database/seeds/csvs/orderproduct.csv';

    }

    public function run()
    {
      DB::disableQueryLog();

      DB::table($this->table)->truncate();

      parent::run();
    }


}
