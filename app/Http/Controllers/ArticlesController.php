<?php namespace App\Http\Controllers;
use Auth;
use App\Article;
use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;
use Illuminate\HttpResponse;
use App\Http\Controllers\Controller;


class ArticlesController extends Controller {

    public function __construct()
    {
        $this->middleware('auth', ['only' => 'create']);
       // $this->middleware('auth', ['only' => 'create']);
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
               // $articles = Article::latest('published_at')->published()->get();
                $articles = Article::orderBy('published_at', 'desc')->get();
                return view ('articles.index', compact('articles'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return view ('articles.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ArticleRequest $request)
	{
        $article = new Article($request->all());
        Auth::user()->articles()->save($article);
        \Session::flash('flash_message','Ваша новая статья сохранена!');
        return redirect ('articles');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Article $article){
		//

        return view ('articles.article', compact('article'));

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Article $article)	{

        return view('articles.edit',compact('article'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Article $article, ArticleRequest $request)
    {

        $article->update($request->all());
        return redirect ('articles');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
