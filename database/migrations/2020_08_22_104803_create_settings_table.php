<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('gradient_from')->default("#2B2B2B");
            $table->string('gradient_to')->default("#4D4D4D");
            $table->string('chat_background')->default("#E5E5E5");
            $table->string('title')->default("Virtual Event 2020");
            $table->string('event_title')->default("<span>Virtual</span> <br> Event <br> 2020");
            $table->string('link')->default("https://www.youtube.com/embed/Z4vD9ppAQhw");
            $table->longText('description')->nullable();
            $table->integer('poll_tab')->default(0);
            $table->integer('question_tab')->default(0);
            $table->string('keywords')->default("event, 2020, webinar");
            $table->boolean('enable_polls')->default(1);
            $table->boolean('enable_questions')->default(1);
            $table->boolean('enable_resources')->default(1);
            $table->boolean('enable_speakers')->default(1);
            $table->boolean('enable_social')->default(0);
            $table->boolean('enable_agenda')->default(1);
            $table->string('polls_tab_name')->default("Polling");
            $table->string('questions_tab_name')->default("Q&As");
            $table->string('resources_tab_name')->default("Resources List");
            $table->string('speakers_tab_name')->default("Speakers");
            $table->string('social_tab_name')->default("Social");
            $table->string('agenda_tab_name')->default("Event Agenda");
            $table->string('after_question')->default("Thanks for answering the question.");
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
        Schema::dropIfExists('settings');
    }
}
