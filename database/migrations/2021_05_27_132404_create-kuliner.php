<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKuliner extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kuliner', function (Blueprint $table) {
			$table->id();
			$table->string('url-gambar');
			$table->string('nama');
			$table->string('toko');
			$table->string('harga');
			$table->string('deskripsi');
			$table->string('url-map');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('kuliner');
	}
}
