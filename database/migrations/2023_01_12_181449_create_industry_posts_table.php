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
        Schema::create('industry_posts', function (Blueprint $table) {
            $table->id();
          $table->unsignedBigInteger('institute_id')->nullable();
          $table->unsignedBigInteger('industry_id')->nullable();
          $table->unsignedBigInteger('job_event_id')->nullable();
          $table->string('job_title');
          $table->string('position');
          $table->string('vacancy');
          $table->string('location')->nullable();
          $table->string('contact_mail')->nullable();
          $table->string('contact_phone')->nullable();
          $table->string('location')->nullable();
          $table->longText('job_context')->nullable();
          $table->longText('educational_requirement')->nullable();
          $table->longText('additional_requirement')->nullable();
          $table->longText('job_responsibility')->nullable();
          $table->longText('compensation')->nullable();
          $table->string('salary')->nullable();
          $table->string('experience_requirement')->nullable();
          $table->string('application_deadline')->nullable();
          $table->string('tag')->nullable();
          $table->string('company_name')->nullable();
          $table->string('status')->default(\App\Models\IndustryPost::$statusArrays[0]);
          $table->string('ntvqf_level')->nullable();
          $table->string('employment_status')->default(\App\Models\IndustryPost::$employment_status[0]);
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
        Schema::dropIfExists('industry_posts');
    }
};
