<?php

use Illuminate\Database\Seeder;



class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	for ($i=0; $i < 5; $i++) { 
    		
    	
        DB::table('user')->insert([
            'username' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => Hash::make('love'),
            'phone'=> '13'.rand(111111111,999999999),
            'profile'=>'/uploads/3194_1525339976.jpg',
            'status'=>1
        ]);

        }
    }
}
