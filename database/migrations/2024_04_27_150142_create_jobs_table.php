<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('title');
            $table->text('description');
            $table->string('location');
            $table->string('type');
            $table->string('encourage_type')->nullable();
            $table->string('experience');
            $table->string('education');
            $table->decimal('pay', 10, 2);
            $table->string('skills');
            $table->dateTime('deadline');
            $table->string('language')->nullable();
            $table->enum('status', ['open', 'closed', 'expired'])->default('open');
            $table->boolean('visibility')->default(true);
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
        Schema::dropIfExists('jobs');
    }
};
