<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * Get the comments for the blog post.
     */
    public function products()
    {
        return $this->hasMany('App\Model\Product');
    }
}
