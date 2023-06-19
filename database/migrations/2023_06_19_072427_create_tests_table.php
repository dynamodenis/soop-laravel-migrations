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
            $table->string("description")->nullable()->change();
            // $table->renameColumn('status', 'statuses');
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
            // $table->bigInteger("test_id")->change();
            // $table->string("test_name")->nullable(false)->change();
            //$table->dropColumn("description");
            // $table->smallInteger('status')->nullable();
        });
        // Schema::dropIfExists('tests');
    }
};
