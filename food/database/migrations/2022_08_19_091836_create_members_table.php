<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('first')->nullable();
            $table->string('last')->nullable();
            $table->string('user')->nullable();
             $table->string('mobile')->nullable();
              $table->string('password')->nullable();
    
               $table->string('village')->nullable();
                $table->string('pin')->nullable();
                 $table->string('status');
                 $table->string('greeting');
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
        Schema::dropIfExists('members');
    }
  
}
