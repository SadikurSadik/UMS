<?php

use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('departments')->insert([
          'deptcode' => 'CSE',
          'deptname' => 'Computer Science and Engineering'
      ]);
      DB::table('departments')->insert([
          'deptcode' => 'EEE',
          'deptname' => 'Electrical and Electronics Engineering'
      ]);
    }
}
