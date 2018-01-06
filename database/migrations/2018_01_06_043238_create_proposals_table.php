<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProposalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('proposal_type',255);
            $table->string('proposal_no',50);
            $table->string('project_name',255);
            $table->string('project_type',255);
            $table->string('contact_name',255);
            $table->string('contact_mobile',100);
            $table->string('contact_email',255);
            $table->text('notes');
            $table->timestamps();
        });
        DB::update("ALTER TABLE proposals AUTO_INCREMENT = 1000;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proposals');
    }
}
