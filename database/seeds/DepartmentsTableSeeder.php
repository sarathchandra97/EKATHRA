<?php

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('departments')->delete();
        
        \DB::table('departments')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Civil Engineering',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Chemical Engineering',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Computer Science and Engineering',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Electronics and Communication Engineering',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Electrical and Electronics Engineering',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Information Technology',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Instrumentation Engineering',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Mechanical Engineering',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Metallurgical Engineering',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Petroleum Engineering',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Aerospace Engineering',
            ),
        ));
        
        
    }
}