<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Table name
    protected $table = "posts";

    // Primary Key
    public $primartkey = "id";

    // Timestamps
    public $timestamps = true;

}
