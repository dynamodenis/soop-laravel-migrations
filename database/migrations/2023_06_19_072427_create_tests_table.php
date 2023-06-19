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
     */
    public function up()
    {
        Schema::table('tests', function (Blueprint $table) {
            $table->bigInteger("test_id")->change();
            $table->string("test_name")->nullable()->change();
            $table->string("description")->nullable();
            $table->smallInteger('status')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tests', function (Blueprint $table) {
            $table->integer("test_id")->change();
            $table->string("test_name")->nullable(false)->change();
            $table->dropColumn("description");
        });
        // Schema::dropIfExists('tests');
    }
};
