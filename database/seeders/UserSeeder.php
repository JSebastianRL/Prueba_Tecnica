<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		DB::table('users')->insert([
			'ids_document'=>'1',
			'number_id' => '123awsda',
			'name' => 'Joan',
			'second_name' => 'Rojas',
			'email' => 'Laverdexd@gmail.com',
			'password' => '123das'
		]);
	}
}
