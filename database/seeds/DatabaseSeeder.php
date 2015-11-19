<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
            Model::unguard();
            $this->call('UserTableSeeder');
            $this->command->info('User Table Seeded');

		// $this->call('UserTableSeeder');
	}

}

class UserTableSeeder extends Seeder{
    public function run(){
        DB::table('users')->delete();
        DB::table('users')->insert([
            'username'=>'admin',
            'email'=>'sompong.so@indexlivingmall.com',
            'password'=>  Hash::make('darknj'),
            'name'=>'สมพงษ์  ศรชัยปัญญา',
            'tel'=>'087-3562567',
            'type'=>'admin',
            'created_at'=>date('Y-m-d H:i:s')
        ]);
    }
}
