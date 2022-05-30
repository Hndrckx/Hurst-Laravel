<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class MembreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membres', function (Blueprint $table){
            $table->id();
            $table->string('nom');
            $table->string('prénom');
            $table->string('src');
            $table->string('fonction');
            $table->string('infos');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('membres');
    }
}