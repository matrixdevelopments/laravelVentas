<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class ModifyTableInvoices extends Migration
{

	/**
	 * Run the migrations.
	 * @return void
	 */
	public function up()
	{
		Schema::table('invoices', function (Blueprint $table)
		{
			$table->dropColumn(array('name', 'products'));
			$table->text('delivery_address')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 * @return void
	 */
	public function down()
	{
		Schema::table('invoices', function (Blueprint $table)
		{
			$table->dropColumn('delivery_address');
			$table->string('name');
			$table->longText('products');
		});
	}
}
