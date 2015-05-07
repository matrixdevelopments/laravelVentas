<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTableInvoiceProduct extends Migration
{

	/**
	 * Run the migrations.
	 * @return void
	 */
	public function up()
	{
		Schema::create('invoice_product', function (Blueprint $table)
		{
			$table->integer('invoice_id');
			$table->integer('product_id');
			$table->integer('product_amount')->default(1);
		});
	}

	/**
	 * Reverse the migrations.
	 * @return void
	 */
	public function down()
	{
		Schema::drop('invoice_product');
	}
}
