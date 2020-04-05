<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
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
        'author_id','publisher_id','genre_id','title','year'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    public function publisher() {

    	return $this->belongsTo(Publisher::class);
    }
    public function author() {

    	return $this->belongsTo(Author::class);
    }
    public function genre() {

    	return $this->belongsTo(Genre::class);
    }
}
