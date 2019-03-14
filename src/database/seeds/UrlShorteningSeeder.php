<?php
namespace JaviSolutions\UrlShortener\Database\Seeds;

use Illuminate\Database\Seeder;
use JaviSolutions\UrlShortener\Models\UrlShortening;

class UrlShorteningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory( UrlShortening::class, 50)->create();
    }
}
