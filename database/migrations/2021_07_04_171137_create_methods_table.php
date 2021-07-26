<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMethodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('methods', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('explanation');
            $table->string('type');
            $table->integer('widget_id');
            $table->timestamps();
        });
        $methodsTable=DB::table('methods')->get();
        DB::table('widgets')->insert(
            array(
                'methods' =>$methodsTable
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('methods');
    }
}
