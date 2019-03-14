<?php
namespace JaviSolutions\UrlShortener\Database\Seeds;

use Illuminate\Database\Seeder;
use JaviSolutions\UrlShortener\Models\UrlShorteningVisit;

class UrlShorteningVisitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(UrlShorteningVisit::class, 2500)->create();
    }
}
