<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BuatTabelProduk extends Migration {
public	function up() {
	//untuk	membuat	tabel,	kolom,	index	pada	database
	Schema::create('produk', function(Blueprint $table) {
		$table->increments('id_produk');
		$table->string('nama_produk');
		$table->integer('harga_beli');
		$table->integer('harga_jual');
		$table->timestamps();
	});
}
public function down() {
	Schema::drop('produk');
    }
}