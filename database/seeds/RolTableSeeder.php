<?php

use Illuminate\Database\Seeder;

use App\Rol;

class RolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            "administrador",
            "editor",
            "supervisor"
        ];

        foreach ($data as $key => $value) {
            $rol = new Rol();
            $rol->name = $value;
            $rol->save();
        }
        

    }
}
