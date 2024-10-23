<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookshelfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bookshelfs')->insert([
            [
            'code' => 'BS001',
            'name' => 'Manga'
            ],
            [
            'code' => 'BS002',
            'name' => 'Novel'
            ],
        ]);
        Book::create([
            'title'         => 'Gajah terbang',
            'author'        => 'minsittar',
            'year'          => '2024',
            'publisher'     => 'universitas gajah terbang',
            'city'          => 'cianjur',
            'cover'         => 'gajah terbang.jpg',
            'bookshelf_id'  => 1
        ]);
    }
}
