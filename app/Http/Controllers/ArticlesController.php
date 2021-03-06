<?php namespace App\Http\Controllers;
use Auth;
use App\Article;
use App\Tag;
use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;
use Illuminate\HttpResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;


/**
 * Class ArticlesController
 * @package App\Http\Controllers
 */
class ArticlesController extends Controller {

    /**
     *
     */
    public function __construct()
    {
        $this->middleware('auth', ['only' => ['create', 'edit']]);
        $this->middleware('admin', ['only' => ['create', 'edit']]);
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
                $articles = Article::latest('published_at')->published()->paginate(6);
                $articles->setPath('/laravel_1/public/articles');
                return view ('articles.index', compact('articles'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $tags = Tag::lists('name', 'id');
        return view ('articles.create', compact('tags'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ArticleRequest $request)
	{
        $this->createArticle($request);
        \Session::flash('message','Ваша новая статья сохранена!');
        return redirect('articles');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Article $article)
    {
        return view ('articles.show', compact('article'));
	}


	public function edit(Article $article)	{

        $tags = Tag::lists('name', 'id');
        return view('articles.edit',compact('article', 'tags'));
	}


	public function update(Article $article, ArticleRequest $request)
    {

        $article->update($request->all());
        $this->syncTags($article, $request->input('tag_list'));
        return redirect ('articles');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function destroy(Article $article)
    {
        $article->delete();

        // redirect
        \Session::flash('message','Ваша статья была удалена!');
        return Redirect::to('articles');
    }

    /**
     * @param Article $article
     * @param ArticleRequest $request
     */
    private function syncTags(Article $article, array $tags)
    {
        $article->tags()->sync($tags);
    }


    /**
     * sace a new article
     * @param ArticleRequest $request
     * @return mixed
     */
    private function createArticle(ArticleRequest $request)
    {
        $article = Auth::user()->articles()->create($request->all());
        $this->syncTags($article, $request->input('tag_list'));
        return $article;
    }

}
