

<h1> create posts</h1>
{!! Form::open(['action'=>'postController@store','method'=>'POST'])!!}
    <div class=form-group>
        {{Form::label('title','Title')}}
        {{Form::text('title','',['class'=>'form-control','placeholder'=>'title'])}}
    </div>

    <div class=form-group>
        {{Form::label('body','Body')}}
        {{Form::textarea('body','',['class'=>'form-control','placeholder'=>'Body text'])}}
    </div>
    {{Form::submit('submit',['class'=>'btn btn-primary'])}}
{!!Form::close() !!}

