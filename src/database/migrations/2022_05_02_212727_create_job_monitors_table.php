<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (app()->environment() !== 'production') {
            Schema::create('job_monitors', function (Blueprint $table) {
                $table->id();
                $table->string('status')->nullable();
                $table->json('job_data')->nullable();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (app()->environment() !== 'production') {
            Schema::dropIfExists('monitors');
        }
    }
};
