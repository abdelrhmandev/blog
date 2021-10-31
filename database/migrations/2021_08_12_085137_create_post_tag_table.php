<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTagTable extends Migration
{
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('post_tag', function (Blueprint $table) {
                $table->integer('post_id')->unsigned()->index();
                $table->integer('tag_id')->unsigned()->index();
                $table->foreign('post_id')->references('id')->on('posts')->onUpdate('cascade')->onDelete('cascade');               
                $table->foreign('tag_id')->references('id')->on('tags')->onUpdate('cascade')->onDelete('cascade');   
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
            Schema::drop('post_tag');
        }    
}  
