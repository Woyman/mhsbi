<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as ModelMongoDb;

class Ucapan extends ModelMongoDb
{
    protected $fillable = ['_id', 'nama', 'ucapan', 'datetime'];
    protected $collection = 'ucapan';
    protected $primaryKey = '_id';
}
