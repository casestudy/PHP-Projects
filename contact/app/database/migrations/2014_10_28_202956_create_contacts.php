<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContacts extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contacts' , function(Blueprint $table){
            $table->increments('id') ;
            $table->string('name') ;
            $table->string('surname') ;
            $table->string('email');
            $table->string('phone');
            $table->char('gender') ;
            $table->text('address') ;
            $table->text('picture') ;
            $table->integer('accounts_id')->unsigned()->references('id')->on('accounts') ;
            $table->timestamps() ;
        }) ;

        Schema::create('accounts' , function(Blueprint $table){
            $table->increments('id') ;
            $table->string('username')->unique() ;
            $table->string('password') ;
            $table->timestamps() ;
        });

        Schema::create('secondary' , function(Blueprint $table){
            $table->increments('id') ;
            $table->string('email');
            $table->string('phone');
            $table->integer('accounts_id')->unsigned()->references('id')->on('accounts');
            $table->timestamps() ;
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('contacts');
        Schema::drop('accounts');
        Schema::drop('secondary');
	}

}
