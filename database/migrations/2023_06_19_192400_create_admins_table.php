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
        Schema::table('admin', function (Blueprint $table) {
            $table->bigInteger("admin_id")->change();
            $table->string("admin_fname")->nullable()->change();
            $table->string("admin_mname")->nullable()->change();
            $table->string("admin_lname")->nullable()->change();
            $table->string("role")->nullable()->change();
            $table->bigInteger("xced_id")->nullable()->change();
            $table->bigInteger("created_by")->nullable()->change();
            $table->bigInteger("mod_by")->nullable()->change();
            $table->string("created_dt")->nullable()->change();
            $table->string("mod_dt")->nullable()->change();
            $table->string("device")->nullable()->change();
            $table->string("active_ind")->nullable()->change();
            $table->string("admin_status")->nullable()->comment("0 = Full time, 1 = Part time, 2 = Casual, 3 = Apprentice/Intern")->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('admin', function (Blueprint $table) {
        });
    }
};
