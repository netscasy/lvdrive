<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTicket extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket', function (Blueprint $table) {
            $table->string('id', 50)->primary();
            $table->unsignedInteger('number');
            $table->text('summary');
            $table->integer('priority');
            $table->timestamp('completed_date')->nullable();
            $table->timestamp('created_on')->nullable();
            $table->integer('is_story');
            $table->string('milestone_id', 50)->nullable();
            $table->string('space_id', 50);
            $table->integer('state');
            $table->string('status', 25);
            $table->timestamp('updated_at')->nullable();
            // $table->float('working_hours')->nullable();
            // $table->float('estimate')->nullable();
            // $table->float('total_estimate')->nullable();
            // $table->float('story_estimate')->nullable();
            // $table->float('total_invested_hours')->nullable();
            // $table->float('totalworking_hours')->nullable();
            $table->string('assigned_to_id', 50)->nullable();
            $table->string('billable', 5)->nullable();
            $table->string('category', 25)->nullable();
            $table->string('group', 50)->nullable();
            $table->string('owner', 50)->nullable();
            $table->string('sow', 100)->nullable();
            $table->integer('hierarchy_type')->nullable();
            $table->date('due_date')->nullable();
            $table->timestamp('inserted_date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_date')->default(\DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });
        \DB::statement('ALTER TABLE `ticket` ADD `working_hours` FLOAT');
        \DB::statement('ALTER TABLE `ticket` ADD `estimate` FLOAT');
        \DB::statement('ALTER TABLE `ticket` ADD `total_estimate` FLOAT');
        \DB::statement('ALTER TABLE `ticket` ADD `story_estimate` FLOAT');
        \DB::statement('ALTER TABLE `ticket` ADD `total_invested_hours` FLOAT');
        \DB::statement('ALTER TABLE `ticket` ADD `totalworking_hours` FLOAT');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ticket');
    }
}
