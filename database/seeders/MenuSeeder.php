<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['slug' => 'coffee', 'name' => 'Coffee', 'sort_order' => 1],
            ['slug' => 'noncoffee', 'name' => 'Non-coffee', 'sort_order' => 2],
            ['slug' => 'meal', 'name' => 'Makanan berat', 'sort_order' => 3],
            ['slug' => 'snack', 'name' => 'Snack & bakery', 'sort_order' => 4],
        ];

        foreach ($categories as $category) {
            Category::updateOrCreate(['slug' => $category['slug']], $category + ['is_active' => true]);
        }

        $categoryIds = Category::query()->pluck('id', 'slug');

        $products = [
            ['slug' => 'hibyra-aren-latte', 'name' => 'Hibyra Aren Latte', 'category' => 'coffee', 'label' => 'House favourite · Iced', 'description' => 'Double espresso, susu segar, dan gula aren.', 'price' => 28000, 'tag' => 'Best seller', 'image' => 'https://images.unsplash.com/photo-1461023058943-07fcbe16d735?auto=format&fit=crop&w=1000&q=85', 'image_alt' => 'Es kopi susu dengan lapisan espresso dan susu', 'featured' => true],
            ['slug' => 'cafe-latte', 'name' => 'Cafe Latte', 'category' => 'coffee', 'label' => 'Espresso bar · Hot / iced', 'description' => 'Espresso dengan susu steamed dan lapisan foam tipis.', 'price' => 25000, 'image' => 'https://images.unsplash.com/photo-1570968915860-54d5c301fa9f?auto=format&fit=crop&w=1000&q=85', 'image_alt' => 'Cafe latte hangat dengan latte art'],
            ['slug' => 'slow-bar-v60', 'name' => 'Slow Bar V60', 'category' => 'coffee', 'label' => 'Single origin · Hot / iced', 'description' => 'Seduhan manual dari biji pilihan kebun Indonesia.', 'price' => 32000, 'tag' => 'Barista pick', 'image' => 'https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?auto=format&fit=crop&w=1000&q=85', 'image_alt' => 'Alat seduh manual dan cangkir kopi'],
            ['slug' => 'ice-americano', 'name' => 'Ice Americano', 'category' => 'coffee', 'label' => 'Espresso bar · Iced', 'description' => 'Espresso dan air dingin, ringan untuk menemani fokus.', 'price' => 20000, 'image' => 'https://images.unsplash.com/photo-1517701604599-bb29b565090c?auto=format&fit=crop&w=1000&q=85', 'image_alt' => 'Kopi hitam dingin dengan es batu'],
            ['slug' => 'matcha-latte', 'name' => 'Matcha Latte', 'category' => 'noncoffee', 'label' => 'Tea bar · Hot / iced', 'description' => 'Matcha lembut dengan susu creamy.', 'price' => 29000, 'image' => 'https://images.unsplash.com/photo-1515823064-d6e0c04616a7?auto=format&fit=crop&w=1000&q=85', 'image_alt' => 'Matcha latte hijau dengan susu'],
            ['slug' => 'lychee-tea', 'name' => 'Ice Lychee Tea', 'category' => 'noncoffee', 'label' => 'Tea bar · Iced', 'description' => 'Teh dingin yang ringan dengan lychee dan citrus.', 'price' => 20000, 'image' => 'https://images.unsplash.com/photo-1556679343-c7306c1976bc?auto=format&fit=crop&w=1000&q=85', 'image_alt' => 'Es teh buah yang segar'],
            ['slug' => 'dark-chocolate', 'name' => 'Dark Chocolate', 'category' => 'noncoffee', 'label' => 'House made · Hot / iced', 'description' => 'Cokelat pekat untuk teman kerja tanpa kafein.', 'price' => 27000, 'image' => 'https://images.unsplash.com/photo-1695459003559-a84af05f043e?auto=format&fit=crop&w=1000&q=85', 'image_alt' => 'Cangkir dark chocolate panas dengan kayu manis di atas meja kayu'],
            ['slug' => 'chicken-katsu-bowl', 'name' => 'Chicken Katsu Bowl', 'category' => 'meal', 'label' => 'Rice bowl · All day', 'description' => 'Ayam katsu renyah, nasi hangat, salad, dan saus khas.', 'price' => 35000, 'tag' => 'Filling & good', 'image' => 'https://images.unsplash.com/photo-1546069901-ba9599a7e63c?auto=format&fit=crop&w=1000&q=85', 'image_alt' => 'Rice bowl dengan ayam, sayuran segar, dan nasi', 'featured' => true],
            ['slug' => 'beef-bulgogi-bowl', 'name' => 'Beef Bulgogi Bowl', 'category' => 'meal', 'label' => 'Rice bowl · All day', 'description' => 'Beef bulgogi gurih manis, telur, dan nasi hangat.', 'price' => 39000, 'image' => 'https://images.unsplash.com/photo-1512058564366-18510be2db19?auto=format&fit=crop&w=1000&q=85', 'image_alt' => 'Rice bowl dengan daging dan sayuran', 'featured' => true],
            ['slug' => 'chicken-teriyaki-bowl', 'name' => 'Chicken Teriyaki Bowl', 'category' => 'meal', 'label' => 'Rice bowl · All day', 'description' => 'Ayam panggang saus teriyaki, telur, dan nasi hangat.', 'price' => 32000, 'image' => 'https://images.unsplash.com/photo-1569718212165-3a8278d5f624?auto=format&fit=crop&w=1000&q=85', 'image_alt' => 'Rice bowl ayam teriyaki dengan nasi'],
            ['slug' => 'spaghetti-carbonara', 'name' => 'Spaghetti Carbonara', 'category' => 'meal', 'label' => 'Pasta · All day', 'description' => 'Pasta creamy dengan smoked beef dan taburan keju.', 'price' => 36000, 'image' => 'https://images.unsplash.com/photo-1612874742237-6526221588e3?auto=format&fit=crop&w=1000&q=85', 'image_alt' => 'Spaghetti carbonara dengan saus creamy'],
            ['slug' => 'chicken-aglio-olio', 'name' => 'Chicken Aglio Olio', 'category' => 'meal', 'label' => 'Pasta · All day', 'description' => 'Pasta bawang putih, minyak zaitun, dan ayam panggang.', 'price' => 34000, 'image' => 'https://images.unsplash.com/photo-1473093295043-cdd812d0e601?auto=format&fit=crop&w=1000&q=85', 'image_alt' => 'Pasta aglio olio dengan taburan herbs'],
            ['slug' => 'chicken-wings', 'name' => 'Chicken Wings', 'category' => 'snack', 'label' => 'Sharing plate · 6 pcs', 'description' => 'Sayap ayam berbumbu dengan pilihan saus pedas manis.', 'price' => 32000, 'tag' => 'Good for sharing', 'image' => 'https://images.unsplash.com/photo-1527477396000-e27163b481c2?auto=format&fit=crop&w=1000&q=85', 'image_alt' => 'Sayap ayam panggang dengan saus'],
            ['slug' => 'fries-cheese', 'name' => 'French Fries & Cheese', 'category' => 'snack', 'label' => 'Snack · All day', 'description' => 'Kentang goreng renyah dengan saus keju gurih.', 'price' => 22000, 'image' => 'https://images.unsplash.com/photo-1573080496219-bb080dd4f877?auto=format&fit=crop&w=1000&q=85', 'image_alt' => 'Kentang goreng renyah dengan saus'],
            ['slug' => 'butter-croissant', 'name' => 'Butter Croissant', 'category' => 'snack', 'label' => 'Bakery · Fresh daily', 'description' => 'Renyah di luar, buttery di dalam. Teman pas untuk kopi.', 'price' => 20000, 'tag' => 'Baked daily', 'image' => 'https://images.unsplash.com/photo-1555507036-ab1f4038808a?auto=format&fit=crop&w=1000&q=85', 'image_alt' => 'Croissant keemasan yang baru dipanggang'],
            ['slug' => 'choco-pancake', 'name' => 'Choco Pancake', 'category' => 'snack', 'label' => 'Sweet treat · All day', 'description' => 'Pancake lembut dengan cokelat dan buah segar.', 'price' => 28000, 'image' => 'https://images.unsplash.com/photo-1528207776546-365bb710ee93?auto=format&fit=crop&w=1000&q=85', 'image_alt' => 'Pancake cokelat dengan buah segar'],
        ];

        foreach ($products as $index => $product) {
            Product::updateOrCreate(
                ['slug' => $product['slug']],
                [
                    'category_id' => $categoryIds[$product['category']],
                    'name' => $product['name'],
                    'label' => $product['label'],
                    'description' => $product['description'],
                    'price' => $product['price'],
                    'tag' => $product['tag'] ?? null,
                    'image_url' => $product['image'],
                    'image_alt' => $product['image_alt'],
                    'is_featured' => $product['featured'] ?? false,
                    'is_available' => true,
                    'sort_order' => $index + 1,
                ],
            );
        }
    }
}
