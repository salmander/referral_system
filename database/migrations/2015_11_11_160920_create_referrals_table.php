<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReferralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('referrals', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('title', 10);
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->timestamp('date_of_birth');
            $table->string('email', 150);
            $table->string('telephone_mobile', 30);
            $table->string('address1', 60);
            $table->string('address2', 60);
            $table->string('town', 60);
            $table->string('city', 60);
            $table->string('postcode', 10);
            $table->integer('status_id')->default(1);
            $table->timestamp('status_changed_at');
            $table->integer('status_changed_by');

            // Add indexes
            $table->unique('email');
            $table->index('status_id');
            $table->index('status_changed_at');
            $table->index('created_at');
            $table->index('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('referrals');
    }
}
