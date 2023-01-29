<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DesignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        1 ['title' => 'HR'],
        2 ['title' => 'Administration'],
        3 ['title' => 'Digital Studio'],
        4 ['title' => 'Finanace'],
        5 ['title' => 'Tech'],
        6 ['title' => 'IT'],
        7 ['title' => 'Contact Center'],
        8 ['title' => 'Marketing'],

        DB::table('departments')->insert(
            [
                ['department_id'=> , 'title' => ''],
                ['department_id'=> , 'title' => ''],
                ['department_id'=> , 'title' => ''],
                ['department_id'=> , 'title' => ''],
                ['department_id'=> , 'title' => ''],
                ['department_id'=> , 'title' => ''],
                ['department_id'=> , 'title' => ''],
                ['department_id'=> , 'title' => ''],
                ['department_id'=> , 'title' => ''],
                ['department_id'=> , 'title' => ''],
                ['department_id'=> , 'title' => ''],
                ['department_id'=> , 'title' => ''],
                ['department_id'=> , 'title' => ''],
                ['department_id'=> , 'title' => ''],
                ['department_id'=> , 'title' => ''],
                ['department_id'=> , 'title' => ''],
                ['department_id'=> , 'title' => ''],
                ['department_id'=> , 'title' => ''],
                ['department_id'=> , 'title' => ''],
                ['department_id'=> , 'title' => ''],
            ]);
    }
}
