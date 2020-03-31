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
        // $this->call(UsersTableSeeder::class);

        $this->truncateTable([
            'rols',
            'permits'
            ]);

        $this->call(RolTableSeeder::class);
        $this->call(PermitTableSeeder::class);
    }

    protected function truncateTable(array $tables){
        Schema::disableForeignKeyConstraints();
        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }
        Schema::enableForeignKeyConstraints();
    }
}
