<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDivisionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       // if(Schema::hasTable('nar_division')){
            Schema::dropIfExists('nar_division');
        //}else{
            Schema::create('nar_division', function (Blueprint $table) {
                $table->increments('id');
                $table->string('division_name_eng',150);
                $table->string('division_name_bangla',250)->charset('utf8');
                $table->integer('division_code',5);
                $table->integer('country_code',5);
                $table->integer('status_active',2);
                $table->integer('is_deleted',2);
                $table->timestamps();
            });
        //}
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nar_division');
    }
}
