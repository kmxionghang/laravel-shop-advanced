<?php

use App\Models\Product;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductsAddType extends Migration
{
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('type')->after('id')->default(Product::TYPE_NORMAL)->index();
        });
    }

    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('type');
        });
    }
}
