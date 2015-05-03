<?php namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    protected $fillable =[
        'title',
        'body',
        'published_at',
        'price'
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

}
