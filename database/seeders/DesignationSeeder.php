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

        $records = [
                        // HR 1
                        [
                            'department_id'=>1,
                            'title'=>'Chief Human Resource Officer',
                            'sub_title'=>'',
                            'jd'=>'',
                        ],
                        [
                            'department_id'=>1,
                            'title'=>'Vice President of Human Resources',
                            'sub_title'=>'',
                            'jd'=>'',
                        ],
                        [
                            'department_id'=>1,
                            'title'=>'HR Director',
                            'sub_title'=>'',
                            'jd'=>'',
                        ],
                        [
                            'department_id'=>1,
                            'title'=>'HR Manager',
                            'sub_title'=>'',
                            'jd'=>'',
                        ],
                        [
                            'department_id'=>1,
                            'title'=>'Assistant Manager',
                            'sub_title'=>'',
                            'jd'=>'',
                        ],
                        [
                            'department_id'=>1,
                            'title'=>'Recruiter',
                            'sub_title'=>'',
                            'jd'=>'',
                        ],

                        // Finanace 2
                        // Tech 3
                        // IT 4
                        // Contact Center 5
                        // Marketing 6
                        // Sales 7

                   ];

        DB::table('designations')->insert($records);
    }
}
