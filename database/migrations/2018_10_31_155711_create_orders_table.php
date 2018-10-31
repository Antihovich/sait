<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
			
		$table->text('body')->nullable();
		$table->string('email')->nullable();	
		$table->string('phone')->nullable();	
		$table->string('address')->nullable();	
		$table->string('type')->nullable();	
		$table->string('fio')->nullable();	
		$table->text('comment')->nullable();
        $table->integer('user_id')->nullable();
        $table->string('status')->nullable();			
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
        Schema::dropIfExists('orders');
    }
}
