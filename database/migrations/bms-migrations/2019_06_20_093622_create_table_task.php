<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTask extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task', function (Blueprint $table) {
            $table->string('id', 50)->primary();
            $table->text('description');
            $table->text('url');
            // $table->float('hours');
            $table->timestamp('begin_at')->nullable();
            $table->timestamp('end_at')->nullable();
            $table->string('space_id', 50);
            $table->integer('ticket_number');
            $table->string('ticket_id', 50);
            $table->string('user_id', 50);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_date')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_date')->default(\DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });
        \DB::statement('ALTER TABLE `task` ADD `hours` FLOAT');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('task');
    }
}
