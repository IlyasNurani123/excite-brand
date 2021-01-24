<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeoServiceFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seo_service_forms', function (Blueprint $table) {
            $table->id();
            $table->boolean("seo_service")->nullable();
            $table->boolean("google_ads_service")->nullable();
            $table->boolean("web_design_service")->nullable();
            $table->string("price")->nullable();
            $table->string("name")->nullable();
            $table->string("email")->nullable();
            $table->string("contact_no")->nullable();
            $table->string("website_url")->nullable();
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
        Schema::dropIfExists('seo_service_forms');
    }
}
