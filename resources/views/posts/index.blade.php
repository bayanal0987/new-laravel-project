

 {{-- @extends('layouts.app'); --}}
 @extends('layouts.app')
 @include('inc.navbar')
{{-- @section('content'); --}}
<h1>posts</h1>
@if(count($posts) >0)
  <div class="well">
      @foreach ($posts as $post)
  <h1><a href="/posts/{{$post->id}}">{{$post->title}}</a></h1>
          <small> written at{{$post->created_at}}</small>
          <br>
          <a href="/posts/{{$post->id}}/edit" class="btn btn-default"> Edit</a>

     <br>     
{!!Form::open(['action'=>['postController@destroy',$post->id],'method'=>'POST','class'=>'pull-right'])!!}

{{Form::hidden('_method','DELETE')}}
{{Form::submit('delete',['class'=>'btn btn-danger'])}}
{!!Form::close()!!}
     @endforeach
     {{$posts->links()}}
  </div>
@else
  <p> there are no posts found</p>  
@endif
    

{{-- @endsection; --}}