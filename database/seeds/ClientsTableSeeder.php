<?php

use Flynsarmy\CsvSeeder\CsvSeeder;

class ClientsTableSeeder extends CsvSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function __construct()
    {
      $this->table = 'clients';
      $this->csv_delimiter = ',';
      $this->filename = base_path().'/database/seeds/csvs/clients.csv';

    }

    public function run()
    {
      DB::disableQueryLog();

      DB::table($this->table)->truncate();

      parent::run();
    }


}
