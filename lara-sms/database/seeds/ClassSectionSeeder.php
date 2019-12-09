<?php

use Illuminate\Database\Seeder;
use App\Models\StudentClass;
class ClassSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $data=[

       		["section"=>"A"],
       		["section"=>"B"],
       		["section"=>"C"],
       		["section"=>"D"],
       		["section"=>"E"],

       ];
       StudentClass::insert($data);
    }
}
