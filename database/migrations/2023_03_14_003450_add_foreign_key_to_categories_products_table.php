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
        Schema::table('categories_products', function (Blueprint $table) {
            $table->foreign("category_id")->references("id")->on("categories")->onUpdate("NO ACTION")->onUpdate("CASCADE");
            $table->foreign("product_id")->references("id")->on("products")->onUpdate("NO ACTION")->onUpdate("CASCADE");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('categories_products', function (Blueprint $table) {
            $table->dropForeign(["category_id"]);
            $table->dropForeign(["product_id"]);
        });
    }
};
