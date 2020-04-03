<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Publisher extends Model
{

    use SoftDeletes;
    /**
     * The attributes mutator dates
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    public function book(){
    	return $this->hasMany(Book::class);
    }

    /**
     * Delete only if there are no related records
     */
    protected static function boot(){
        parent::boot();

        static::deleting(function($publisher) {
            if ($publisher->book()->count() > 0) 
                return false;
        });
    }
}