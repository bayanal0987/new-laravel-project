

 {{-- @extends('layouts.app'); --}}

{{-- @section('content') --}}
<a href="/posts" class="btn btn-default">GO Back</a>
<h1>{{$post->title}}</h1>

    <div class="city">
{{$post->body}}
    </div>
    <hr>
    <small> written on{{$post->created_at}}</small>
    <hr>
{{-- <a href="/posts/{{$post->id}}/edit" class="btn btn-default"> Edit</a>

{!!Form::open(['action'=>['postController@destroy',$post->id],'method'=>'POST','class'=>'pull-right'])!!}

{{Form::hidden('_method','DELETE')}}
{{Form::submit('delete',['class'=>'btn btn-danger'])}}
{!!Form::close()!!} --}}
{{-- @endsection; --}}