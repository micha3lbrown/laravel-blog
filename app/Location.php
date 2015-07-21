<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Location extends Model
{
	protected $table = 'locations';

    /**
     * The table columns that are allowed to be filled
     * @var array
     */
	protected $fillable = [
        'active',
        'distance',
        'name',
		'stars',
        'visited_at'
    ];

    protected $dates = ['visited_at'];

//    public function setVisitedAtAttribute($date)
//    {
//        $this->attributes['visited_at'] = Carbon::Parse('Y-m-d', $date);
//    }

    public function getVisitedAtAttribute()
    {
        return $this->attributes['visited_at'];
    }

	/**
	 * Get the tags associated with the given location
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function tags()
	{	
		return $this->belongsToMany('App\Tag');
	}

	/**
	 * Get ids of associated tags 
	 * @return [Array] Tag Ids
	 */
	public function getTagListAttribute() 
	{
		return $this->tags->lists('id')->toArray();
	}

	public function user()
	{
		return $this->belongsTo('App\User');
	}
}
