<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('vacancies', function (Blueprint $table) {
            $table->string("title");
            $table->foreignId("salary_id")->constrained()->onDelete("cascade");
            $table->foreignId("category_id")->constrained()->onDelete("cascade");
            $table->string("company");
            $table->date("deadline");
            $table->text("description");
            $table->string("image");
            $table->boolean("published")->default(1);
            $table->foreignId("user_id")->constrained()->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('vacancies', function (Blueprint $table) {
            $table->dropForeign(["salary_id", "category_id", "user_id"]);

            $table->dropColumn([
                "title",
                "company",
                "deadline",
                "description",
                "image",
                "published",
            ]);
        });
    }
};
