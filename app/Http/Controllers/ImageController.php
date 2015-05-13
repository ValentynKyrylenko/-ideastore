<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Image;
use Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;
use Intervention\Image\ImageManagerStatic as Image_Int;

class ImageController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
    {
        $entries = Image::all();

        return view('images.images', compact('entries'));
    }

    public function add() {

        $file = Request::file('filefield');
        $filename = time() . '__'. $file->getClientOriginalName();
        $path = public_path('/media/admin_media/' . $filename);

        Image_Int::make($file->getRealPath())->resize(500, null, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        })->save($path);


        $entry = new Image();
        $entry->mime = $file->getClientMimeType();
        $entry->original_filename = $file->getClientOriginalName();
        $entry->filename = $filename;

        $entry->save();

        return redirect('image');

    }

    public function get($filename){

        $entry = Image::where('filename', '=', $filename)->orderBy('created_at', 'desc')->firstOrFail();
        $file = Storage::disk('laravel')->get($entry->filename);

        return (new Response($file, 200))
            ->header('Content-Type', $entry->mime);
    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
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

    public function delete($filename)
    {
        $entry = Image::where('filename', '=', $filename)->firstOrFail();
        $entry->delete();
        Storage::disk('laravel')->delete($entry->filename);
        return redirect('image');

    }



}
