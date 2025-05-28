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
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string("first_name",100);
            $table->string("last_name",100);
            $table->string("email",100);
            $table->string("mobile",20);
            $table->string("city",100);
            $table->string("center",100);
            $table->string("pincode",10);
            $table->string("utm_source",100);
            $table->string("utm_campaign",100);
            $table->enum('crm_status', ['0', '1'])->default('1');
            $table->enum('whatsapp_status', ['0', '1'])->default('1');
            $table->enum('mail_status', ['0', '1'])->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
