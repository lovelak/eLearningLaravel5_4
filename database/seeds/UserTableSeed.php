<?php

use Illuminate\Database\Seeder;

class UserTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new App\User();
        $user->name = 'leksoft';
        $user->email = 'leksoft@rmu.ac.th';
        $user->password = bcrypt('9091');
        $user->save();
    }
}
