<?php namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Tag;

class TagsController extends Controller {

	public function show(Tag $tag)
    {
        $articles = $tag->articles()->published()->paginate(6);
        $articles->setPath('/laravel_1/public/tags/' . $tag->name);
        return view('articles.index', compact('articles'));
    }

}
