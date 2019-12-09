<?php

use Illuminate\Database\Seeder;
use App\Models\FacultyType;
class FacultyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
        		["type"=>"teaching"],
        		["type"=>"non teching"],
        		["type"=>"lab masters"],
        		["type"=>"sports teacher"]

        ];
        FacultyType::insert($data);
    }
}
