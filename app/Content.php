<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    //
    protected $table = 'content';
    protected $fillable = ['title', 'description', 'priority', 'meta_title', 'meta_description', 'post_type', 'category', 'tags', 'excerpts', 'parent', 'category', 'featured_image', 'added_by', 'parent_user', 'meta_value', 'gallery', 'slug'];
    protected $casts = [
        'tags' => 'array',
        'category' => 'array'
    ];


    public function contents() {
        return $this->hasMany(Content::class);

        // hasOne
        // hasMany
        // belongsTo
        // belongsToMany
        // morphMany
        //morhpToMany

        // // hasOne = return SELECT * FROM content WHERE user_id = auth->id;
        // user_id coloumn must be there in content table
    }

}
