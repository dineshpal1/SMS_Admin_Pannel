<?php

use Illuminate\Database\Seeder;
use App\Models\Gender; 
class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[

        		["type"=>"male"],
        		["type"=>"female"]
        ];
        Gender::insert($data);
    }
}
