<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(SuggestionTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(CommentTableSeeder::class);
        $this->call(OrderTableSeeder::class);
        $this->call(ProductImageTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(OrderProductTableSeeder::class);
        $this->call(ProductCategoryTableSeeder::class);
    }
}
