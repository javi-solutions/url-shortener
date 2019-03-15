<?php

namespace JaviSolutions\UrlShortener\Models;

use Illuminate\Database\Eloquent\Model;

class UrlShortening extends Model
{
    public $incrementing = false;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'url_target',
        'user_id',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    /**
     * Get shortening visits
     *
     * @return Model
     */
    public function visits()
    {
        return $this->hasMany(Relation::$morphMap['urlShorteningVisit']);
    }

    public function getUrlAttribute()
    {
        return $this->id !== null ? route('urlShortener', ['id' => $this->id]) : false;
    }
}
