<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => "Leslie",'email' => 'leslie@test.com', 'password' => bcrypt("111222")],
        ]);
    }
}
