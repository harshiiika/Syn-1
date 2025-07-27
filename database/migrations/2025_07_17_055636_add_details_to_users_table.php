<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('users', function (Blueprint $table) {
        // $table->string('name')->nullable();
        $table->string('email')->nullable();
        $table->string('mobile')->nullable();  
        $table->string('branch')->nullable();
        $table->string('role')->nullable();
        $table->string('department')->nullable();
        
       
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
