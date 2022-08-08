<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeeStructuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fee_structures', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('admission_fee')->nullable()->comment('1 Time Only');
            $table->string('total_fee_by_user')->nullable()->comment('Total fee by this user');
            $table->string('monthly_fee')->nullable();
            $table->date('admission_date')->nullable();
            $table->date('issue_fee_date')->nullable();
            $table->date('due_fee_date')->nullable();
            $table->enum('status', ['Paid', 'Unpaid'])->nullable();
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
        Schema::dropIfExists('fee_structures');
    }
}
