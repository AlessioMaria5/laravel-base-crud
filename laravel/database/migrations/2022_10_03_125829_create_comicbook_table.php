<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicbookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comicbook', function (Blueprint $table) {
            $table->id();
            $table->string('titolo',50);
            $table->text('description');
            $table->string('thumb');
            $table->decimal('price', 9, 3);
            $table->time('sale_date');
            $table->string('type',50);
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
        Schema::dropIfExists('comicbook');
    }
}
