<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTables([
          'users',
          'professions'
        ]);

        $this->call(ProfessionSeeder::class);
        $this->call(UserSeeder::class);

    }

    protected function truncateTables(array $tables)
    {
      DB::statement('SET_FOREIGN_KEY_CHECKS = 0;');

      foreach ($tables as $table) {
        DB::table($table)->truncate();
      }
    }
}
