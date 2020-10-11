<?php

use App\Model\Category;
use App\Model\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();
//        Category::truncate();

        factory(Category::class,10)->create();
//        factory(Product::class,10)->create();

        
//        factory(Category::class,10)->create()->each(function ($category){
//           $category->product()->save(factory(Product::class,25)->make());
//        });
//        ====================================================================
//        factory(Product::class,20)->create(['category_id' => $category->category_id])->each(function ($product){
////            $product->category()->save();
////        });
    }
}
