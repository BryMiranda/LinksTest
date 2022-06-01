<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\BookFeature;
use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Testing\WithFaker;

class AppSeeder extends Seeder
{
    use WithFaker;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bookOne = Book::create([
                'ISBN' => '978-84-376-0494-7',
                'title' => 'El libro de los expertos',
                'subtitle' => 'El libro de los expertos',
                'status' => 1,
                'version' => '1',
                'copies_number' => '1',
                'made_at' => '2019-01-01',
            ]);

        $bookTwo = Book::create([
                'ISBN' => '978-84-376-0494-7',
                'title' => 'El libro de los expertos',
                'subtitle' => 'El libro de los expertos',
                'status' => 0,
                'version' => 2,
                'copies_number' => '1',
                'made_at' => '2019-01-01',
            ]);

        Tag::create([
            'description' => 'author',
        ]);

        Tag::create([
            'description' => 'editorial',
        ]);

        Tag::create([
            'description' => 'themes',
        ]);

        Tag::create([
            'description' => 'content',
        ]);

        Tag::create([
            'description' => 'characters',
        ]);

        BookFeature::create([
            'book_id' => $bookOne->id,
            'tag_id' => Tag::where('type', 'author')->first()->id,
            'value' => 'Juan Perez',
        ]);

        BookFeature::create([
            'book_id' => $bookOne->id,
            'tag_id' => Tag::where('type', 'editorial')->first()->id,
            'value' => 'Editorial',
        ]);

        BookFeature::create([
            'book_id' => $bookTwo->id,
            'tag_id' => Tag::where('type', 'themes')->first()->id,
            'value' => 'Fantasia',
        ]);
    }
}
