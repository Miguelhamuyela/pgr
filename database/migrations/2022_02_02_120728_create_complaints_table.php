<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplaintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaints', function (Blueprint $table) {
            $table->id();
            $table->string('name',255);
            $table->string('email',255);
            $table->string('phone',12);
            $table->string('complaintData');
            $table->string('actsCorruption');
            $table->string('datesPeriods');
            $table->string('identificationSuspects');
            $table->longText('knowledgeFacts');
            $table->string('amountsInvolved',255);
            $table->string('knowledge',255)->nullable();

            $table->longText('documentsEvidenc')->nullable();
            $table->string('attachment',255)->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('complaints');
    }
}
