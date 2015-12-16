<?php

use Illuminate\Database\Migrations\Migration;

class UpdatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('players', function ($table) {
            $table->integer('user_id')->index();
            $table->timeStamp('can_delete');
            $table->text('comment');
            $table->integer('hide')->default(0);
            $table->timeStamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('players', function ($table) {
            $table->dropColumn(['user_id', 'created_at', 'updated_at', 'can_delete', 'hide', 'comment']);
        });
    }
}
