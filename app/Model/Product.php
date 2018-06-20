<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * Get the post that owns the comment.
     */
    public function category()
    {
        return $this->belongsTo('App\Model\Category');
    }
}
