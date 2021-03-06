<?php namespace App\Http\Controllers;

use Auth;
use App\Ad;
use App\Tagad;
use App\Http\Requests;
use App\Http\Requests\AdRequest;
use App\Http\Controllers\Controller;
use Illuminate\HttpResponse;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Redirect;

class AdsController extends Controller {
    /**
     * Auth Access
     */

    public function __construct()
    {
        $this->middleware('auth', ['only' => ['index', 'create', 'edit', 'show']]);

    }

    /**
     *
     * processing input image for faster use
     */
    public function make_image(){
        // configure with favored image driver (gd by default)
        Image::configure(array('driver' => 'gd'));

        // and you are ready to go ...

        $image = Image::make('http://localhost/laravel_1/public/tears.jpg');
        $image->resize(100, null, function ($constraint) {
            $constraint->aspectRatio();
        });
        $image->save('tears_1.jpg');

        return 'done';
    }
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $ads = Ad::orderBy('created_at', 'DESC')->published()->get();
        $user_ads = Auth::user()->ads()->published()->get();

        $tagads = Tagad::all();
        return view ('ads.index', compact('ads', 'user_ads', 'tagads'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $tagads = Tagad::lists('name', 'id');
        return view ('ads.create', compact('tagads'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(AdRequest $request)
	{
        $this->createAd($request);
        \Session::flash('message','Ваше объявление сохранено!');
        return redirect('ads');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Ad $ad)
	{
        return view ('ads.show', compact('ad'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Ad $ad)
	{
        $tagads = Tagad::lists('name', 'id');
        return view('ads.edit',compact('ad', 'tagads'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Ad $ad, AdRequest $request)
	{
          $ad->update($request->all());

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('/media/visitors_adds/' . $filename);
            Image::make($image->getRealPath())->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->trim('top-left', null, 40)->save($path);
            $image = '/media/visitors_adds/' . $filename;
            $input['image'] = $image;

            $ad['image']=$image;
            $ad->save();
        }





        $this->syncTagads($ad, $request->input('tagad_list'));
        \Session::flash('message','Ваше объявление изменено!');
        return redirect ('ads');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Ad $ad)
	{

        $ad->delete();

        // redirect
        \Session::flash('message','Ваше объявление было удалено!');
        return Redirect::to('ads');
	}

    private function syncTagads(Ad $ad, array $tagads)
    {
        $ad->tagads()->sync($tagads);
    }

    private function createAd(AdRequest $request)
    {
        $input = $request->all();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('/media/visitors_adds/' . $filename);
            Image::make($image->getRealPath())->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->trim('top-left', null, 40)->save($path);
            $image = '/media/visitors_adds/' . $filename;
            $input['image'] = $image;
        }


        $ad = Auth::user()->ads()->create($input);
        $this->syncTagads($ad, $request->input('tagad_list'));
        return $ad;
    }
}
