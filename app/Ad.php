<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model {

    protected $fillable =[
        'published_at',
        'title',
        'body',
        'condition',
        'image',
        'ad_tag',
        'location',
        'post',
        'price',
        'phone'
        ];
    protected $dates = ['published_at'];
    public function setPublishedAtAttribute($date)
    {
        $this->attributes['published_at'] = Carbon::parse($date);
    }
    public function getPublishedAtAttribute($date)
    {
        return Carbon::parse($date)->format('Y-m-d');
    }



    public function scopePublished($query)
    {
        $query->where('published_at','<=', Carbon::now());
    }

    public function scopeUnpublished($query)
    {
        $query->where('published_at','>', Carbon::now());
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
