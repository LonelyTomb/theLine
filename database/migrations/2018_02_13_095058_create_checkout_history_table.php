<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCheckoutHistoryTable extends Migration
{
	/**
	 * Run the migrations.
	 * @return void
	 */
	public function up()
	{
		Schema::create('checkout_history', function (Blueprint $table) {
			$table->increments('id');
			$table->string('user_id')->index('user_id');
			$table->json('cart');
			$table->string('payerId');
			$table->string('paymentId');
			$table->string('token');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('checkout_history');
	}
}
