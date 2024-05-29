<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('email_verified_at');
            // $table->dropColumn('remember_token');

            $table->unsignedInteger('role_id')->after('id');
            $table->string('phone_number', length:25)->nullable()->after('password');
            $table->enum('gender', ['L', 'P'])->nullable()->after('phone_number');
            $table->softDeletes('deleted_at', precision:0)->after('remember_token');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
