<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Request;
use App\Http\Requests;
use App\Http\Requests\CreateVideoRequest;
use App\Http\Controllers\Controller;
use App\Video;
use Auth;
use Session;

class VideosController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth' , ['except' => ['index' , 'show']]);
	}
    
	public function index()
	{
		$videos = Video::orderBy('title', 'desc')->get();
		return view('videos.index')->with('videos' , $videos);
	}

	public function show($id)
	{
		$video = Video::findOrFail($id);
		return view('videos.show')->with('video' , $video);
	}

	public function create()
	{
		return view('videos.create');
	}

	public function store(CreateVideoRequest $request)
	{
		//$submit = Request::all();
		//Video::create($submit);
		//Video::create($request->all());
		$video = new Video($request->all());
		Auth::user()->videos()->save($video);
		Session::flash('video_created' , 'Twój film został pomyślnie dodany');
		return redirect('videos');
	}

	public function edit($id)
	{
		$video = Video::findOrFail($id);
		return view('videos.edit')->with('video' , $video);
	}

	public function update($id , CreateVideoRequest $request)
	{
		$video = Video::findOrFail($id);
		$video->update($request->all());
		Session::flash('video_updated' , 'Twój film został zaktualizowany');
		return redirect('videos');
	}

}
