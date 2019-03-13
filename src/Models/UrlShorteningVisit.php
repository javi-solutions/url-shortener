<?php

namespace JaviSolutions\UrlShortener\Models;

use Illuminate\Database\Eloquent\Model;

class UrlShorteningVisit extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'url_shortening_id',
        'ip_address',
        'user_agent',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at'
    ];

    /**
     * Get shortening visits
     *
     * @return Model
     */
    public function urlShortening()
    {
        return $this->belongsTo(Relation::$morphMap['urlShortening']);
    }
}
