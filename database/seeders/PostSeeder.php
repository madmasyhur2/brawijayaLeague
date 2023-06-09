<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\post;
use Carbon\Carbon;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'judul' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod',             
                'gambar_berita' => 'gambar1.jpg',
                'isi' => 'Amet est placerat in egestas erat. Iaculis eu non diam phasellus vestibulum. Aenean et tortor at risus viverra adipiscing at. Id aliquet risus feugiat in ante metus dictum at tempor. Turpis massa tincidunt dui ut ornare lectus sit amet est. Justo laoreet sit amet cursus. Ornare massa eget egestas purus. Ullamcorper eget nulla facilisi etiam dignissim diam quis enim. In ante metus dictum at tempor commodo ullamcorper. Convallis tellus id interdum velit laoreet id donec ultrices. In tellus integer feugiat scelerisque varius morbi enim nunc faucibus. Tempor orci eu lobortis elementum nibh tellus molestie nunc non. Et malesuada fames ac turpis.',
            ],
            [
                'judul' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod',                  
                'gambar_berita' => 'gambar2.jpg',
                'isi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Non diam phasellus vestibulum lorem sed risus ultricies tristique. Amet consectetur adipiscing elit duis tristique sollicitudin nibh sit amet. Pellentesque nec nam aliquam sem et. Gravida neque convallis a cras semper auctor neque vitae tempus. Non pulvinar neque laoreet suspendisse interdum. Eget duis at tellus at urna condimentum mattis pellentesque. A lacus vestibulum sed arcu non odio euismod. Nullam eget felis eget nunc lobortis mattis. Cum sociis natoque penatibus et. Non pulvinar neque laoreet suspendisse interdum consectetur libero. Lacus sed viverra tellus in hac habitasse platea. Lectus nulla at volutpat diam ut venenatis. Tellus id interdum velit laoreet id donec ultrices tincidunt arcu. Ultricies lacus sed turpis tincidunt. Quam adipiscing vitae proin sagittis nisl. Vel pretium lectus quam id leo in vitae turpis. Mollis nunc sed id semper.',
            ],
            [
                'judul' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod',                  
                'gambar_berita' => 'gambar3.jpg',
                'isi' => 'Amet est placerat in egestas erat. Iaculis eu non diam phasellus vestibulum. Aenean et tortor at risus viverra adipiscing at. Id aliquet risus feugiat in ante metus dictum at tempor. Turpis massa tincidunt dui ut ornare lectus sit amet est. Justo laoreet sit amet cursus. Ornare massa eget egestas purus. Ullamcorper eget nulla facilisi etiam dignissim diam quis enim. In ante metus dictum at tempor commodo ullamcorper. Convallis tellus id interdum velit laoreet id donec ultrices. In tellus integer feugiat scelerisque varius morbi enim nunc faucibus. Tempor orci eu lobortis elementum nibh tellus molestie nunc non. Et malesuada fames ac turpis.',
            ],
            [
                'judul' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod',                  
                'gambar_berita' => 'gambar4.jpg',
                'isi' => 'Amet est placerat in egestas erat. Iaculis eu non diam phasellus vestibulum. Aenean et tortor at risus viverra adipiscing at. Id aliquet risus feugiat in ante metus dictum at tempor. Turpis massa tincidunt dui ut ornare lectus sit amet est. Justo laoreet sit amet cursus. Ornare massa eget egestas purus. Ullamcorper eget nulla facilisi etiam dignissim diam quis enim. In ante metus dictum at tempor commodo ullamcorper. Convallis tellus id interdum velit laoreet id donec ultrices. In tellus integer feugiat scelerisque varius morbi enim nunc faucibus. Tempor orci eu lobortis elementum nibh tellus molestie nunc non. Et malesuada fames ac turpis.',
            ],
            [
                'judul' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod',                  
                'gambar_berita' => 'gambar5.jpg',
                'isi' => 'Amet est placerat in egestas erat. Iaculis eu non diam phasellus vestibulum. Aenean et tortor at risus viverra adipiscing at. Id aliquet risus feugiat in ante metus dictum at tempor. Turpis massa tincidunt dui ut ornare lectus sit amet est. Justo laoreet sit amet cursus. Ornare massa eget egestas purus. Ullamcorper eget nulla facilisi etiam dignissim diam quis enim. In ante metus dictum at tempor commodo ullamcorper. Convallis tellus id interdum velit laoreet id donec ultrices. In tellus integer feugiat scelerisque varius morbi enim nunc faucibus. Tempor orci eu lobortis elementum nibh tellus molestie nunc non. Et malesuada fames ac turpis.',
            ],
            [
                'judul' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod',                  
                'gambar_berita' => 'gambar6.jpg',
                'isi' => 'Amet est placerat in egestas erat. Iaculis eu non diam phasellus vestibulum. Aenean et tortor at risus viverra adipiscing at. Id aliquet risus feugiat in ante metus dictum at tempor. Turpis massa tincidunt dui ut ornare lectus sit amet est. Justo laoreet sit amet cursus. Ornare massa eget egestas purus. Ullamcorper eget nulla facilisi etiam dignissim diam quis enim. In ante metus dictum at tempor commodo ullamcorper. Convallis tellus id interdum velit laoreet id donec ultrices. In tellus integer feugiat scelerisque varius morbi enim nunc faucibus. Tempor orci eu lobortis elementum nibh tellus molestie nunc non. Et malesuada fames ac turpis.',
            ],
            [
                'judul' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod',                  
                'gambar_berita' => 'gambar1.jpg',
                'isi' => 'Amet est placerat in egestas erat. Iaculis eu non diam phasellus vestibulum. Aenean et tortor at risus viverra adipiscing at. Id aliquet risus feugiat in ante metus dictum at tempor. Turpis massa tincidunt dui ut ornare lectus sit amet est. Justo laoreet sit amet cursus. Ornare massa eget egestas purus. Ullamcorper eget nulla facilisi etiam dignissim diam quis enim. In ante metus dictum at tempor commodo ullamcorper. Convallis tellus id interdum velit laoreet id donec ultrices. In tellus integer feugiat scelerisque varius morbi enim nunc faucibus. Tempor orci eu lobortis elementum nibh tellus molestie nunc non. Et malesuada fames ac turpis.',
            ],
            [
                'judul' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod',                  
                'gambar_berita' => 'gambar2.jpg',
                'isi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Non diam phasellus vestibulum lorem sed risus ultricies tristique. Amet consectetur adipiscing elit duis tristique sollicitudin nibh sit amet. Pellentesque nec nam aliquam sem et. Gravida neque convallis a cras semper auctor neque vitae tempus. Non pulvinar neque laoreet suspendisse interdum. Eget duis at tellus at urna condimentum mattis pellentesque. A lacus vestibulum sed arcu non odio euismod. Nullam eget felis eget nunc lobortis mattis. Cum sociis natoque penatibus et. Non pulvinar neque laoreet suspendisse interdum consectetur libero. Lacus sed viverra tellus in hac habitasse platea. Lectus nulla at volutpat diam ut venenatis. Tellus id interdum velit laoreet id donec ultrices tincidunt arcu. Ultricies lacus sed turpis tincidunt. Quam adipiscing vitae proin sagittis nisl. Vel pretium lectus quam id leo in vitae turpis. Mollis nunc sed id semper.',
            ],
            [
                'judul' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod',                  
                'gambar_berita' => 'gambar3.jpg',
                'isi' => 'Amet est placerat in egestas erat. Iaculis eu non diam phasellus vestibulum. Aenean et tortor at risus viverra adipiscing at. Id aliquet risus feugiat in ante metus dictum at tempor. Turpis massa tincidunt dui ut ornare lectus sit amet est. Justo laoreet sit amet cursus. Ornare massa eget egestas purus. Ullamcorper eget nulla facilisi etiam dignissim diam quis enim. In ante metus dictum at tempor commodo ullamcorper. Convallis tellus id interdum velit laoreet id donec ultrices. In tellus integer feugiat scelerisque varius morbi enim nunc faucibus. Tempor orci eu lobortis elementum nibh tellus molestie nunc non. Et malesuada fames ac turpis.',
            ],
            [
                'judul' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod',                  
                'gambar_berita' => 'gambar4.jpg',
                'isi' => 'Amet est placerat in egestas erat. Iaculis eu non diam phasellus vestibulum. Aenean et tortor at risus viverra adipiscing at. Id aliquet risus feugiat in ante metus dictum at tempor. Turpis massa tincidunt dui ut ornare lectus sit amet est. Justo laoreet sit amet cursus. Ornare massa eget egestas purus. Ullamcorper eget nulla facilisi etiam dignissim diam quis enim. In ante metus dictum at tempor commodo ullamcorper. Convallis tellus id interdum velit laoreet id donec ultrices. In tellus integer feugiat scelerisque varius morbi enim nunc faucibus. Tempor orci eu lobortis elementum nibh tellus molestie nunc non. Et malesuada fames ac turpis.',
            ],
            [
                'judul' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod',                  
                'gambar_berita' => 'gambar5.jpg',
                'isi' => 'Amet est placerat in egestas erat. Iaculis eu non diam phasellus vestibulum. Aenean et tortor at risus viverra adipiscing at. Id aliquet risus feugiat in ante metus dictum at tempor. Turpis massa tincidunt dui ut ornare lectus sit amet est. Justo laoreet sit amet cursus. Ornare massa eget egestas purus. Ullamcorper eget nulla facilisi etiam dignissim diam quis enim. In ante metus dictum at tempor commodo ullamcorper. Convallis tellus id interdum velit laoreet id donec ultrices. In tellus integer feugiat scelerisque varius morbi enim nunc faucibus. Tempor orci eu lobortis elementum nibh tellus molestie nunc non. Et malesuada fames ac turpis.',
            ],
            [
                'judul' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod',                  
                'gambar_berita' => 'gambar6.jpg',
                'isi' => 'Amet est placerat in egestas erat. Iaculis eu non diam phasellus vestibulum. Aenean et tortor at risus viverra adipiscing at. Id aliquet risus feugiat in ante metus dictum at tempor. Turpis massa tincidunt dui ut ornare lectus sit amet est. Justo laoreet sit amet cursus. Ornare massa eget egestas purus. Ullamcorper eget nulla facilisi etiam dignissim diam quis enim. In ante metus dictum at tempor commodo ullamcorper. Convallis tellus id interdum velit laoreet id donec ultrices. In tellus integer feugiat scelerisque varius morbi enim nunc faucibus. Tempor orci eu lobortis elementum nibh tellus molestie nunc non. Et malesuada fames ac turpis.',
            ]
        ];

        // Menyimpan data ke dalam database
        foreach ($data as $post) {
            Post::create($post);
        }
    }
}
