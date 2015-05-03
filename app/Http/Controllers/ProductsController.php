<?php namespace App\Http\Controllers;
use Auth;
use App\Product;
use App\Http\Requests;
use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use Illuminate\HttpResponse;
use App\Http\Controllers\Controller;



class ProductsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    public function __construct()
    {
        $this->middleware('auth', ['only' => ['create', 'edit', 'show', 'delete']]);
        $this->middleware('admin', ['only' => ['create', 'edit', 'delete']]);
    }

	public function index()
	{
        $products = Product::latest('published_at')->published()->get();
        return view ('products.index', compact('products'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return view ('products.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
    public function store(Product $product, ProductRequest $request)
    {
        \Session::flash('message','Ваша работа сохранена!');
        $product->create($request->all());
        return redirect('products');
    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Product $product)
	{
        return view ('products.show', compact('product'));
	}


	public function edit(Product $product)
	{
        return view('products.edit',compact('product'));
	}


	public function update(Product $product, ProductRequest $request)
	{
        $product->update($request->all());
        return redirect ('products');
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
