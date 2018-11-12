@if ( Auth::user()->is_favorite($micropost->id) )
    {!! Form::open(['route' => ['remove_favorite', $micropost->id], 'method' => 'delete']) !!}
        {!! Form::submit('unfavorite', ['class' => "btn btn-success btn-xs"]) !!}
    {!! Form::close() !!}
@else
    {!! Form::open(['route' => ['favorite', $micropost->id]]) !!}
        {!! Form::submit('favorite', ['class' => "btn btn-default btn-xs"]) !!}
    {!! Form::close() !!}
@endif
