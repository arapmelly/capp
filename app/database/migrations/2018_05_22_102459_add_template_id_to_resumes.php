<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTemplateIdToResumes extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('resumes', function($table) {

        	$table->integer('template_id')->unsigned();
			$table->foreign('template_id')->references('id')->on('templates');
    	});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('resumes', function($table) {
        	$table->dropColumn('template_id');
    	});
	}

}
