<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class categoriesSeeder extends Seeder
{
    public function run()
    {
        Category::create(
            ['id'=>1, 'category' => 'Top']
    
    );
        
    }
}
