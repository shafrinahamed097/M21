<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userId = 1; // Assuming you already have a user with ID 1, replace if needed

        $categories = [
            'Electronics', 'Clothing', 'Books', 'Furniture', 'Beauty', 
            'Toys', 'Sports', 'Automotive', 'Health', 'Food',
            'Home Appliances', 'Groceries', 'Jewelry', 'Tools', 'Garden',
            'Office Supplies', 'Pets', 'Music', 'Games', 'Travel',
            'Fashion', 'Art', 'Photography', 'Footwear', 'Accessories',
            'Watches', 'Outdoor', 'Baby Products', 'Stationery', 'Tech Gadgets',
            'Gifts', 'Luggage', 'Cosmetics', 'Wellness', 'Cleaning Supplies',
            'Party Supplies', 'Bags'
        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'name' => $category,
                'user_id' => $userId, // Replace with valid user_id if necessary
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
