<?php
namespace JaviSolutions\UrlShortener\Database\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Relations\Relation;

class UrlShorteningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Relation::$morphMap['urlShortening'], 50)->create();
    }
}
