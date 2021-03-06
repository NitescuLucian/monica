<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddZarCurrencyToCurrenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('currencies')->insert([ 'iso' => 'ZAR', 'name' => 'South African Rand', 'symbol'=>'R ' ]);
    }
}
