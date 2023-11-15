<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('advocates', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("email");
            $table->string("phone");
            $table->string("address");
            $table->string("location");
            $table->string("website");
            $table->text("bio");
          
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('advocates');
    }
};
