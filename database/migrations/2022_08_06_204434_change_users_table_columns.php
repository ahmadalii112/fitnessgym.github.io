<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeUsersTableColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('gym_id')->nullable()->after('id')->unique();
            $table->string('password')->nullable()->change();
            $table->renameColumn('name','firstname');
            $table->string('middlename')->nullable()->after('name');
            $table->string('lastname')->nullable()->after('middlename');
            $table->enum('gender', ['Male', 'Female', 'Other'])->nullable()->after('lastname');
            $table->date('date_of_birth')->nullable()->after('password');
            $table->string('phone')->nullable()->after('date_of_birth');
            $table->string('mobile')->nullable()->after('date_of_birth');
            $table->string('cnic')->nullable()->after('password');
            $table->string('address')->nullable()->after('password');
            $table->decimal('weight')->nullable()->after('address');
            $table->string('height')->nullable()->after('weight');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('firstname', 'name');
            $table->dropColumn('middlename');
            $table->dropColumn('lastname');
            $table->dropColumn('date_of_birth');
            $table->dropColumn('cnic');
            $table->dropColumn('address');
            $table->dropColumn('mobile');
            $table->dropColumn('phone');
            $table->dropColumn('gender');
            $table->dropColumn('weight');
            $table->dropColumn('height');
            $table->dropColumn('gym_id');
            $table->dropSoftDeletes();
        });
    }
}
