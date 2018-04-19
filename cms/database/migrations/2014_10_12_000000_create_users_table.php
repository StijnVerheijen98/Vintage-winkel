<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create( 'users', function ( Blueprint $table ) {
			$table->increments( 'id' );
			$table->string( 'name' );
			$table->string( 'middle_name' )->nullable();
			$table->string( 'last_name' );
			$table->enum('gender', ['male', 'female']);
			$table->string( 'email' )->unique();
			$table->string( 'password' );
			$table->string( 'street' );
			$table->string( 'street2' )->nullable();
			$table->integer( 'house_number' );
			$table->string( 'house_number_add' )->nullable();
			$table->string( 'zip' );
			$table->string( 'city' );
			$table->string( 'country' );
			$table->rememberToken();
			$table->timestamps();
			$table->softDeletes();
		} );
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists( 'users' );
	}
}
