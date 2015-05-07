<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Tagad extends Model {

    protected $fillable = [
        'name'
    ];

    public function ads()
    {
        return $this->belongsToMany('App\Ad');
    }

}
