<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $this->call(UsersTableSeeder::class);
      $this->call(RolesTableSeeder::class);
      $this->call(ProductsTableSeeder::class);
      $this->call(RebatesTableSeeder::class);
      $this->call(LocalsTableSeeder::class);
      $this->call(ClientsTableSeeder::class);
      $this->call(AgentsTableSeeder::class);
      $this->call(AreasTableSeeder::class);
      $this->call(HospitalsTableSeeder::class);
      $this->call(RoleuserTableSeeder::class);
    }
}
