<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
        $table->bigInteger('id')->unsigned()->nullable();
        $table->bigInteger('category_id')->unsigned()->default(0);
        $table->string('last_name');
        $table->string('first_name');
        $table->tinyInteger('gender');
        $table->string('email');
        $table->string('tel1');
        $table->string('tel2');
        $table->string('tel3');
        $table->string('address');
        $table->string('building')->nullable();
        $table->text('detail');
        $table->timestamp('created_at')->useCurrent()->nullable();
        $table->timestamp('updated_at')->useCurrent()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
