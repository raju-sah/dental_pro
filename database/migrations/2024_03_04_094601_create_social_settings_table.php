<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('social_settings', function (Blueprint $table) {
            $table->id();
            $table->string('facebook_link');
            $table->string('instagram_link');
            $table->string('twitter_link')->nullable();
            $table->string('tiktok_link')->nullable();
            $table->string('whatsapp_no')->nullable();
            $table->string('viber_no')->nullable();
            $table->boolean('status')->default(0);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() : void
    {
        Schema::dropIfExists('social_settings');
    }
}
