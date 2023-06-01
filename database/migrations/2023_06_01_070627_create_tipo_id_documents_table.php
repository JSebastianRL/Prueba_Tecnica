<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	/**
	 * Run the migrations.
	 */
	public function up(): void
	{
		Schema::create('tipo_id_documents', function (Blueprint $table) {
			$table->id();
			$table->string('tipo_id_document');
			$table->softDeletes();
			$table->timestamps();


		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('tipo_id_documents');
	}
};
