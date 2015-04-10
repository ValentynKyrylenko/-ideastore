<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model {

	public function Articles()
    {
        $this->belongsToMany('App\Article');
    }

}
