<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        //$this->call(ClassSectionSeeder::class);
        //$this->call(ClassSeeder::class);
        //$this->call(FacultyTypeSeeder::class);
        //$this->call(GenderSeeder::class);
        //$this->call(FacultySeeder::class);
        // $this->call(StudentSeeder::class);
        $this->call(AdminTableSeeder::class);

    
    }
    
}
