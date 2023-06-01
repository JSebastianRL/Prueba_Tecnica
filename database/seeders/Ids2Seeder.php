<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Ids2Seeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		DB::table('tipo_id_documents')->insert([
			'tipo_id_document' => 'Tarjeta de identidad'
		]);
		DB::table('tipo_id_documents')->insert([
			'tipo_id_document' => 'Cedula de ciudadania'
		]);
		DB::table('tipo_id_documents')->insert([
			'tipo_id_document' => 'Cedula Digital'
		]);
		DB::table('tipo_id_documents')->insert([
			'tipo_id_document' => 'Pasaporte'
		]);
	}
}
