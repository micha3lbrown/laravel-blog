<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
	protected $table = 'locations';

    /**
     * The table columns that are allowed to be filled
     * @var array
     */
	protected $fillable = [
        'name',
        'active',
    ];

	/**
	 * Get the tags associated with the given location
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function tags()
	{
		return $this->belongsToMany('App\Tag');
	}
}
