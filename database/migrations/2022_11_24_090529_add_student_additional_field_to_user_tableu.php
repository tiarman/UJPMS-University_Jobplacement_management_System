<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table(with(new User)->getTable(), function (Blueprint $table) {
          // $table->string('institute_type')->nullable();
          // $table->string('shift_id')->nullable();
          $table->string('section')->nullable();
          $table->string('department_id')->nullable()->comment('Department from Technology');
          $table->string('semester_id')->nullable();
          $table->string('year')->nullable();
          $table->string('session')->nullable();
          $table->string('student_id')->nullable()->unique();
        //   $table->string('running_board_roll')->nullable()->unique();
          $table->string('admission_year')->nullable();
          $table->string('birth_certificate')->nullable()->unique();
          $table->string('employing_company')->nullable();
          $table->string('employment_status')->nullable();
          $table->string('cv', 2048)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table(with(new User)->getTable(), function (Blueprint $table) {
            $table->dropColumn('institute_type');
            $table->dropColumn('department_id');
            $table->dropColumn('semester_id');
            $table->dropColumn('year');
            $table->dropColumn('board_roll');
            $table->dropColumn('session');
        });
    }
};
