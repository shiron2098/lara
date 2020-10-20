<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTest2sTable extends Migration
{
    const name = 'test2s';
    const number = 1;
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(static::name, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 255);
            $table->text('description');
            $table->timestamps();
        });
        for($i = 0;$i<5;$i++) {
            DB::table(static::name)->insert(
                array(
                    'title' => Str::random(25),
                    'description' => 'test' . $i
                )
            );
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(static::name);
    }
}
