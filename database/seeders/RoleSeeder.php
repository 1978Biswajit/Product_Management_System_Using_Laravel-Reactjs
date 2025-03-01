<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use App\Models\Product;


class RoleSeeder extends Seeder
{
    public function run()
    {
        $product = Product::create([
            'name' => 'Product Name',
            'description' => 'Product Description',
            'price' => 100.00,
        ]);
        $products = Product::all();
        $product = Product::find($id);
        
        $product = Product::find($id);
        $product->update([
            'name' => 'Updated Product Name',
            'price' => 120.00,
        ]);
        $product = Product::find($id);
        $product->delete();
                

        // রোল তৈরি করা
        $adminRole = Role::create(['name' => 'Admin']);
        $userRole = Role::create(['name' => 'User']);

        // অ্যাডমিন ইউজার তৈরি করা এবং অ্যাডমিন রোল দেওয়া
        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
        ]);
        $admin->assignRole($adminRole);

        // সাধারণ ইউজার তৈরি করা
        $user = User::create([
            'name' => 'Regular User',
            'email' => 'user@example.com',
            'password' => bcrypt('password'),
        ]);
        $user->assignRole($userRole);
    }
}