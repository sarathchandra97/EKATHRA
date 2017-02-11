<?php

use Illuminate\Database\Seeder;
use Sentinel as Sentinel;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $credentials = [
		    'email'    => 'admin@ekathra.in',
		    'password' => 'ekathra2017',
		];

        $user = Sentinel::registerAndActivate($credentials);

        $role = Sentinel::findRoleBySlug('admin');
        $user->roles()->attach($role);
    }
}
