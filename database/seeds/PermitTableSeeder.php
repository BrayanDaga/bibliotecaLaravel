<?php

use Illuminate\Database\Seeder;
use App\Permit;

class PermitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Permit::class,50)->create();
    }
}
