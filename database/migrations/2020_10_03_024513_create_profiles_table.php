<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('My プロフィール'); // ニュースのタイトルを保存するカラム
            $table->string('名前'); //名前の本文を保存するカラム
            $table->string('性別'); //性別の本文を保存するカラム
            $table->string('趣味');//趣味の本文を保存するカラム
            $table->string('自己紹介'); // 自己紹介の本文を保存するカラム
            $table->string('image_path')->nullable();  // 画像のパスを保存するカラム
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
        Schema::dropIfExists('profiles');
    }
}
