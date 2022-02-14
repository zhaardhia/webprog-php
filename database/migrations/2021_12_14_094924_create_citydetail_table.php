<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitydetailTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('citydetail', function (Blueprint $table) {
			$table->integer('city_id')->index('city_id');
			$table->float('costofliving', 10, 0);
			$table->float('salary', 10, 0);
			$table->float('tax', 10, 0);
			$table->string('seasons');
			$table->float('temperature', 10, 0);
			$table->float('humidity', 10, 0);
			$table->float('aqi', 10, 0);
			$table->float('crimerate', 10, 0);
			$table->enum('racism', array('verylow', 'low', 'medium', 'high', 'veryhigh'));
			$table->enum('traffic', array('verylow', 'low', 'medium', 'high', 'veryhigh'));
			$table->enum('hospital', array('verybad', 'bad', 'okay', 'good', 'verygood'));
			$table->enum('education', array('verybad', 'bad', 'okay', 'good', 'verygood'));
			$table->float('internet', 10, 0);
			$table->enum('recreational', array('notmuch', 'several', 'many'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('citydetail');
	}
}
