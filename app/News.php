<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model {

    /**
     * Массово присваиваемые атрибуты.
     *
     * @var array
     */
    protected $fillable = ['name','text'];

    public function user() {
        return $this->belongsTo(User::class);
    }

}
