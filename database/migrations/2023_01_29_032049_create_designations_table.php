<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * 
     * @return void
     * $table->integer('report_to')->default(0);
     */
    public function up()
    {
        Schema::create('designations', function (Blueprint $table) {
            $table->id();

            $table->foreignId('department_id')->references('id')->on('departments');            
            $table->char('title', 255);
            $table->char('sub_title', 255);
            $table->longText('jd');            

            $table->integer('sort_by')->default(0);
            $table->boolean('is_active')->default(1);
            $table->boolean('is_deleted')->default(0);
            $table->integer('add_by')->default(0);
            $table->integer('edit_by')->default(0);
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
        Schema::dropIfExists('designations');
    }
};
