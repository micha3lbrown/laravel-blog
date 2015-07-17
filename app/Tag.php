<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public $timestamps = false;

    protected $table = 'tags';

    /**
     * The table columns that are allowed to be filled
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    /**
     * Get the locations associated with a tag
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function locations()
    {
        return $this->belongsToMany('App\Location');
    }
}
