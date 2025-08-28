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
        Schema::create('prodcuts', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('oil_type_id');
        $table->unsignedBigInteger('oil_category_id');
        $table->unsignedBigInteger('grade_id');
       
        $table->string('name', 255);
        $table->string('size', 255)->nullable();
        $table->string('measurement_unit', 50);
        $table->decimal('sell_price', 10, 2)->nullable();
        $table->decimal('discount_price', 10, 2)->nullable();
        $table->decimal('purchase_price', 10, 2)->nullable();
        $table->text('description')->nullable();
        $table->date('launch_date');
        $table->float('point')->default(0);

        $table->timestamps();
        $table->softDeletes();

        // Foreign keys
        $table->foreign('oil_type_id')->references('id')->on('oil_types')->onDelete('cascade');
        $table->foreign('oil_category_id')->references('id')->on('oil_categories')->onDelete('cascade');
        $table->foreign('grade_id')->references('id')->on('grades')->onDelete('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prodcuts');
    }
};
