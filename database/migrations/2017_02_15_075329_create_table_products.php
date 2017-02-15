<?php
 
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
 
class CreateTableProducts extends Migration
{
 
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->float('price');
            $table->string('imageurl');
            $table->timestamps();
        });

        DB::table('products')->insert([
                'name' => 'SanDisk Cruzer Blade SDCZ50-016G-135 32GB USB ',
                'description' => 'SanDisk Cruzer Blade SDCZ50-016G-135 32GB USB 2.0 Pen Drive',
                'price' => '339',
                'imageurl' => 'productimages/1.jpg'
            ]
        );

        DB::table('products')->insert([
                'name' => 'Sony Disk Cruzer Blade SDCZ50-016G-135 32GB USB  ',
                'description' => 'Sony Disk Cruzer Blade SDCZ50-016G-135 32GB USB ',
                'price' => '576',
                'imageurl' => 'productimages/4.jpg'
            ]
        );

        DB::table('products')->insert([
                'name' => 'HP Disk Cruzer Blade SDCZ50-016G-135 32GB USB  ',
                'description' => 'HP Disk Cruzer Blade SDCZ50-016G-135 32GB USB ',
                'price' => '560',
                'imageurl' => 'productimages/5.jpg'
            ]
        );

        DB::table('products')->insert([
                'name' => 'SanDisk Cruzer Blade SDCZ50-016G-135 64GB USB ',
                'description' => 'SanDisk Cruzer Blade SDCZ50-016G-135 64GB USB 2.0 Pen Drive',
                'price' => '556',
                'imageurl' => 'productimages/2.jpg'
            ]
        );

        DB::table('products')->insert([
                'name' => 'SanDisk Cruzer Blade SDCZ50-016G-135 128GB USB ',
                'description' => 'SanDisk Cruzer Blade SDCZ50-016G-135 128GB USB 2.0 Pen Drive',
                'price' => '977',
                'imageurl' => 'productimages/3.jpg'
            ]
        );

        DB::table('products')->insert([
                'name' => 'HP Disk Cruzer Blade SDCZ50-016G-135 32GB USB  ',
                'description' => 'HP Disk Cruzer Blade SDCZ50-016G-135 32GB USB ',
                'price' => '860',
                'imageurl' => 'productimages/5.jpg'
            ]
        );
    }
 
    public function down()
    {
        Schema::drop('products');
    }
}