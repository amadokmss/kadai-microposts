@if (Auth::user()->is_favoring($micropost->id))
    {!! Form::open(['route'=>['favorite.unfavor',$micropost->id],'method'=>'delete']) !!}
        {!! Form::submit('Unfavorite',['class'=>"btn btn-primary btn-sm"]) !!}
    {!! Form::close() !!}
@else
    {!! Form::open(['route' => ['favorite.favor',$micropost->id]]) !!}
        {!! Form::submit('Favorite',['class'=>"btn btn-success btn-sm"]) !!}
    {!! Form::close() !!}
@endif
