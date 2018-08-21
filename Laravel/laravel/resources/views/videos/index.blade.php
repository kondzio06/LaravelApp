@extends('master')
@section('content')
<div class="videos-header card">
    <h2>Filmy</h2>
</div>

@if (Session::has('video_created'))
	<div class="alert alert-success card">
		{{ Session::get('video_created') }}
	</div>
@endif

@if (Session::has('video_updated'))
	<div class="alert alert-success card">
		{{ Session::get('video_updated') }}
	</div>
@endif

<div class="row">

	@foreach($videos as $video)
	    <!-- Single video -->
	    <div class="col-xs-12 col-md-6 col-lg-4 single-video">
	        <div class="card">
	        
	            <div class="embed-responsive embed-responsive-16by9">
	                <iframe class="embed-responsive-item" src="{{$video->code}}?showinfo=0" frameborder="0" allowfullscreen></iframe>
	            </div>
	            <div class="card-content">
	                <a href="{{url('videos' , $video->id)}}">
	                    <h4>{{$video->title}}</h4>
	                </a>
	                <p>{{$video->description}}</p>
	                <spam class = "upper-label">Dodany przez</spam>
	                <spam class = "video-author">{{ $video->user->name }}</spam>
	            </div>
	            
	        </div>
	    </div>
    @endforeach

</div>
@stop