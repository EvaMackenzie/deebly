<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use App\Categories;

class CreateCatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        /*DB::table('categories')->insert(
            array(
                'name' => 'urbain'
            )
        );
        DB::table('categories')->insert(
            array(
                'name' => 'mer'
            )
        );
        DB::table('categories')->insert(
            array(
                'name' => 'montagne'
            )
        );
        DB::table('categories')->insert(
            array(
                'name' => 'extreme'
            )
        );*/
        Categories::create([
            'name' => 'mer'
        ]);
        Categories::create([
            'name' => 'montagne'
        ]);
        Categories::create([
            'name' => 'urbain'
        ]);
        Categories::create([
            'name' => 'extreme'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}

