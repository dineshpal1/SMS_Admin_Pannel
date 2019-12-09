<?php

use Illuminate\Database\Seeder;
use App\Admin;
class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
        	[
        		"name"=>"dinesh",
        		"email"=>"dinesh@gamil.com",
        		"password"=>Hash::make("123"),
        	]


        ];


        Admin::insert($data);

    }
}
