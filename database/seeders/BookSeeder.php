<?php



namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Category;

class BookSeeder extends Seeder
{
    public function run()
    {
        // Membuat buku baru
       Book::create([
            'title' => 'Mimpi yang menjadi kenyataan',
            'author' => 'ahmad nur',
            'year' => 1998,
            'publisher' => 'global',
            'city' => 'INA',
            'cover' => 'nurindah',
            'bookshelves_id' => 1,
        ]);

 
    }
}


