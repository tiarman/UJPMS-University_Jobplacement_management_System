<?php

use App\Models\Payment;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create(with(new Payment)->getTable(), function (Blueprint $table) {
      $table->id();
      $table->string('transaction_no');
      $table->double('amount');
      $table->date('payment_date');
      $table->date('next_due_date');
      $table->string('bill_type');
      $table->string('method');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists(with(new Payment)->getTable());
  }
};
