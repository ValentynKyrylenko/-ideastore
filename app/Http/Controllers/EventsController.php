<?php namespace App\Http\Controllers;
use Auth;
use App\Event;
use App\Http\Requests;
use App\Http\Requests\EventRequest;
use Illuminate\Http\Request;
use Illuminate\HttpResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;



class EventsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    public function __construct()
    {
        $this->middleware('auth', ['only' => ['create', 'edit', 'delete']]);
        $this->middleware('admin', ['only' => ['create', 'edit', 'delete']]);
    }

	public function index()
	{
        $events = Event::latest('published_at')->published()->paginate(6);
        $events->setPath('/laravel_1/public/events');
        return view ('events.index', compact('events'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return view ('events.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Event $event, EventRequest $request)
	{
        \Session::flash('message','Новость сохранена!');
        $this->createEvent($request);
        return redirect('events');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Event $event)
	{
        return view ('events.show', compact('event'));
	}


	public function edit(Event $event)
	{
        return view('events.edit',compact('event'));
	}


	public function update(Event $event, EventRequest $request)
	{
        $event->update($request->all());
        return redirect ('events');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function destroy(Event $event)
    {
        $event->delete();

        // redirect
        \Session::flash('message','Ваша новость была удалена!');
        return Redirect::to('events');
    }
    private function createEvent(EventRequest $request)
    {
        $product = Event::create($request->all());

        return $product;
    }


}
