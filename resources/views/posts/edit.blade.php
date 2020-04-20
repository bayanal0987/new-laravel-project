

<h1> edit posts</h1>
{!! Form::open(['action'=>['postController@update',$post->id],'method'=>'POST'])!!}
    <div class=form-group>
        {{Form::label('title','Title')}}
        {{Form::text('title',$post->tilte,['class'=>'form-control','placeholder'=>'title'])}}
    </div>

    <div class=form-group>
        {{Form::label('body','Body')}}
        {{Form::textarea('body',$post->body,['class'=>'form-control','placeholder'=>'Body text'])}}
    </div>
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('submit',['class'=>'btn btn-primary'])}}
{!!Form::close() !!}

