<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BranchCreate extends Migration
{
  public function up()
    {
        Schema::create('equipments', function (Blueprint $table) {
            $table->id();
            $table->string('branch_name',45);
            $table->string('product',45);
            $table->string('transaction',45);
            $table->integer('number_of_product');
            $table->float('product');
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
        Schema::dropIfExists('branch');
    }

}
