<?php

use Flynsarmy\CsvSeeder\CsvSeeder;

class AgentsTableSeeder extends CsvSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function __construct()
    {
      $this->table = 'agents';
      $this->csv_delimiter = ',';
      $this->filename = base_path().'/database/seeds/csvs/agents.csv';

    }

    public function run()
    {
      DB::disableQueryLog();

      DB::table($this->table)->truncate();

      parent::run();
    }


}
